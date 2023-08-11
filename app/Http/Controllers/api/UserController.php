<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function readAll()
    {
        $users = User::all();
        return response()->json([
            'data' => $users,
        ],200);
    }

    function register(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|min:4|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'data' => $user,
        ],201);
    }

    function login(Request $request){

        if (!Auth::attempt($request->only('email','password'))) {
            return response()->json([
                'message' => 'Unauthorized'
            ],401);
        }
        
        $user = User::where('email',$request->email)->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'data' => $user,
            'token' => $token,
        ],200);
    }
}
