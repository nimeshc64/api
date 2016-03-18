<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Recipe;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class testController extends Controller
{
    function index()
    {
        return view ('Home.index');
    }

    function test()
    {

        $detail= DB::select("SELECT * FROM recipe where Rid=1");
        foreach ($detail as $item)
        {
            $a=DB::select("select * from directions where rcip_id='$item->Rid'");
        }
        return response()->json(["Authentication Fail!"]);
//        return view('Home.index', ['streamdata'=>$a]);
//        return [
//            'key' => $detail
//        ];
    }

    function  save(Request $request)
    {
        $Book = Recipe::create($request->all());
        //return $Book;
        return response()->json($Book);
    }
}