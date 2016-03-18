<?php

namespace App\Http\Controllers;
use App\User;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $recip=DB::select("select * from recipe");
        $ingredients=null;
        for($i=0;$i>count($recip);$i++)
        {

            $directions     =DB::select("select * from directions WHERE  recipe_id='$recip[$i]->id'");
            $nutritional    =DB::select("select * from nutritional WHERE recipe_id='$recip[$i]->id'");

        }
        $ingredients    =DB::select("select * from ingredients where recipe_id='$recip[0]->id'");

//        return view('Home.User');
//        return view('Home.User', ['r'=>$recip],['i'=>$ingredients],['d'=>$directions],['n'=>$nutritional]);

        return $recip[1]->id;
       // return  ['r'=>$ingredients];
       // return [$recip,$ingredients,$directions,$nutritional];
    }
}
