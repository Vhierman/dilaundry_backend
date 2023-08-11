<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    function readAll()
    {
        $shops = Shop::all();
        return response()->json([
            'data' => $shops,
        ],200);
    }
}
