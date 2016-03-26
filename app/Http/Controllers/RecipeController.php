<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Recipe;
use App\User;

class RecipeController extends Controller
{

    public function save(Request $request,$apiKey)
    {

        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $recip=new Recipe();
            $recip->title=$request->input('title');
            $recip->country=$request->input('country');
            $recip->user_id=$user[0]->id;
            $recip->save();
            return response()->json($recip);
        }
        else{
            return response()->json(["Not validate API key"]);
        }

    }

    public function update(Request $request,$id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $recip=Recipe::find($id);
            $recip->title=$request->input('title');
            $recip->country=$request->input('country');
            $recip->save();

            return response()->json($recip);
        }
        else{
            return response()->json(["Not validate API key"]);
        }

    }

    public function delete($id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $recip = Recipe::find($id);
            $recip->delete();

            return response()->json('deleted');
        }
        else{
            return response()->json(["Not validate API key"]);
        }
    }

    public function getById($id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null) {
            $recip = Recipe::find($id);

            return response()->json($recip);
        }
        else{
            return response()->json(["Not validate API key"]);
        }

    }

    public function getByTitle($title)
    {
        $recip = DB::select("SELECT r.title,r.country,i.name,i.unit,i.qty,d.steps,n.nutrient,n.amount,n.dri_dv
                              FROM recipe r
                              JOIN ingredients i ON r.id=i.id
                              JOIN directions d ON i.id=d.id
                              JOIN nutritional n ON d.id=n.id
                              WHERE r.title='$title'");

        return response()->json($recip);
    }

}