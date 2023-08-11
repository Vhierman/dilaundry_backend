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

    function readRecommendationLimit()
    {
        $shops = Shop::orderBy('rate','desc')->limit(5)->get();

        if(count($promos)>0){
            return response()->json([
                'data' => $shops,
            ],200);
        }
        else{
            return response()->json([
                'message' => 'not found',
                'data' => $shops,
            ],404);
        }  
    }

    function searchByCity($name)
    {
        $shops = Shop::where('city','like','%'.$name.'%')->orderBy('name')->get();

        if(count($promos)>0){
            return response()->json([
                'data' => $shops,
            ],200);
        }
        else{
            return response()->json([
                'message' => 'not found',
                'data' => $shops,
            ],404);
        }  
    }

}
