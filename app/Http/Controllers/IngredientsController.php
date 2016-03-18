<?php

namespace App\Http\Controllers;
use App\Ingredients;
use Illuminate\Http\Request;
use DB;

class IngredientsController extends Controller
{

    public function save(Request $request,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $ingre=Ingredients::create($request->all());
            return response()->json($ingre);
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
            $ingre=Ingredients::find($id);
            $ingre->recipe_id=$request->input('recipe_id');
            $ingre->name=$request->input('name');
            $ingre->unit=$request->input('unit');
            $ingre->qty=$request->input('qty');
            $ingre->save();

            return response()->json($ingre);
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
            $ingre = Ingredients::find($id);
            $ingre->delete();

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
            $ingre = Ingredients::find($id);

            return response()->json($ingre);
        }
        else{
            return response()->json(["Not validate API key"]);
        }
    }

}
