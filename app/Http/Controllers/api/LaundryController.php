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
}
