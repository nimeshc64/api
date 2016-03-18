<?php

namespace App\Http\Controllers;
use App\Nutritional;
use DB;
class NutritionalController extends Controller
{

    public function save(Request $request,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $nutri=Nutritional::create($request->all());
            return response()->json($nutri);
        }
        else{
            return response()->json(["Not validate API key"]);
        }

    }

    public function  update(Request $request,$id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $nutri=Nutritional::find($id);
            $nutri->recipe_id=$request->input('recipe_id');
            $nutri->nutrient=$request->input('nutrient');
            $nutri->amount=$request->input('amount');
            $nutri->dri_dv=$request->input('dri/dv');
            $nutri->save();

            return response()->json($nutri);
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
            $nutri = Nutritional::find($id);
            $nutri->delete();

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
            $nutri = Nutritional::find($id);

            return response()->json($nutri);
        }
        else{
            return response()->json(["Not validate API key"]);
        }
    }

}
