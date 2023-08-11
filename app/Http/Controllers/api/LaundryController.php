<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Laundry;
use App\Models\User;
use App\Models\Shop;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    //
    function readAll()
    {
        $laundries = Laundry::with('user','shop')->get();
        return response()->json([
            'data' => $laundries,
        ],200);
    }

    function whereUserId($id)
    {
        $laundries = Laundry::where('user_id','=',$id)->with('shop','user')->orderBy('created_at','desc')->get();

        if(count($laundries)>0){
            return response()->json([
                'data' => $laundries,
            ],200);
        }
        else{
            return response()->json([
                'message' => 'not found',
                'data' => $laundries,
            ],404);
        }  
    }
}
