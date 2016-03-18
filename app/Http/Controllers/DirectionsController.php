<?php

namespace App\Http\Controllers;
use App\Directions;
use DB;
use Illuminate\Http\Request;
class DirectionsController extends Controller
{
    public function save(Request $request,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $direc=new Directions();
            $direc->recipe_id=$request->input('recipe_id');
            $direc->steps=$request->input('steps');
            $direc->user_id=$user[0]->id;
            $direc->save();
            return response()->json($direc);
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
            $direc=Directions::find($id);
            $direc->recipe_id=$request->input('recipe_id');
            $direc->steps=$request->input('steps');
            $direc->save();

            return response()->json($direc);
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
            $direc = Directions::find($id);
            $direc->delete();

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
            $direc = Directions::find($id);

            return response()->json($direc);
        }
        else{
            return response()->json(["Not validate API key"]);
        }
    }

}
