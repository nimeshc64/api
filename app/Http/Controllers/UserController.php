<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Recipe;
use App\User;
use App\Ingredients;
use App\Nutritional;
use App\Directions;
use DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{

    public function save(Request $request)
    {
        $token=null;
        $details= User::orderBy('id', 'DESC')->first();
        if($details!=null)
        {
            $id=$details->id;
            $nextToken=$id+1;
            $tok0= str_random(7);
            $tok1=str_random(7);
            $token=$tok0.$nextToken.$tok1;
        }
        else{
            $token=str_random(14);
        }

        $this->validate($request, [
            'password' => 'required',
            'email' => 'required|email|unique:users'
        ]);

        $user=new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
//        $user->password=$request->input('password');
        $user->password=Crypt::encrypt($request->input('password'));
        $user->token=$token;
        $user->save();

        return redirect('user');
    }

    public function login()
    {
        return view('Home.login',['error'=>'','alert'=>'']);
    }

    public function log(Request $request)
    {
        $user=User::where('email','=',$request->Input('email'))->first();
        if($user!=null)
        {
            $decrypted = Crypt::decrypt($user->password);

            if($decrypted==$request->Input('password'))
            {
                session_start();

                $_SESSION['userid'] = $user->id;
                $_SESSION['token'] = $user->token;
                return redirect('user');
            }
            else{
//                return redirect('/');
                return view('Home.login',['error'=>'Email & password Not Match, Enter Again !','alert'=>'alert alert-warning']);
            }
        }
        else{
          //  return redirect('../user/login/');
            return view('Home.login',['error'=>'User Not Found, Register As New User','alert'=>'alert alert-danger']);
        }

    }

    public function index()
    {
        session_start();
        if (isset($_SESSION['userid']))
        {
            $id = $_SESSION['userid'];
            $user=User::where('id','=',$id)->first();
            $recip=Recipe::where('user_id','=',$id)->get()->all();
            $directions=Directions::where('user_id','=',$id)->get()->all();
            $nutritional=Nutritional::where('user_id','=',$id)->get()->all();
            $ingredients=Ingredients::where('user_id','=',$id)->get()->all();

            return view('Home.User', ['re'=>$recip,'in'=>$ingredients,'di'=>$directions,'nu'=>$nutritional,'us'=>$user]);
        }
        else{
            return redirect('user/login');
        }

    }

    public function logout()
    {
        session_start();
        session_destroy();
        return redirect('/');
    }

    public function form()
    {
        session_start();
        $id = $_SESSION['userid'];
        $user=User::where('id','=',$id)->first();
        $recip_ids=DB::select("SELECT * FROM recipe WHERE user_id='$id'");
        return view('Home.form',['us'=>$user],['ids'=>$recip_ids]);
    }

    public function update()
    {
        session_start();
        $id = $_SESSION['userid'];
        $user=User::where('id','=',$id)->first();
        $recip_ids=DB::select("SELECT * FROM recipe WHERE user_id='$id'");
        return view ('Home.update',['us'=>$user],['ids'=>$recip_ids]);
    }
    
    public function delete()
    {
        session_start();
        $id = $_SESSION['userid'];
        $user=User::where('id','=',$id)->first();
        $recip_ids=DB::select("SELECT recipe.id AS Rid,recipe.title AS title,
                                directions.id AS Did,directions.steps AS steps,
                                ingredients.id AS Iid,ingredients.name AS name,
                                nutritional.id AS Nid,nutritional.nutrient AS nutrient
                                FROM
                                recipe
                                JOIN directions ON recipe.id=directions.recipe_id
                                INNER JOIN ingredients ON recipe.id=ingredients.recipe_id
                                INNER JOIN nutritional ON recipe.id=nutritional.recipe_id
                                WHERE recipe.user_id='$id'");
        return view ('Home.delete',['us'=>$user,'ids'=>$recip_ids]);
    }

    public function getDetails(Request $request)
    {
        $id=$request->input('id');
        $recip=DB::select("SELECT recipe.id AS Rid,recipe.title AS title,recipe.country AS country,
                            directions.id AS Did,directions.steps AS steps,
                            ingredients.id AS Iid,ingredients.name AS name, ingredients.unit AS unit,ingredients.qty AS qty,
                            nutritional.id AS Nid,nutritional.nutrient AS nutrient,nutritional.amount AS amount,nutritional.dri_dv AS dri_dv
                            FROM
                            recipe
                            JOIN directions ON recipe.id=directions.id
                            INNER JOIN ingredients ON recipe.id=ingredients.recipe_id
                            INNER JOIN nutritional ON recipe.id=nutritional.recipe_id
                            WHERE recipe.id='$id'");
        return $recip;
    }

    public function updateRecip(Request $request)
    {
        $recip=Recipe::find($request->input('Rid'));
        $recip->title=$request->input('title');
        $recip->country=$request->input('country');
        $recip->save();

        return response()->json($recip);
    }
    
    public function updateIngre(Request $request)
    {
        $ingre=Ingredients::find($request->input('Iid'));
        $ingre->name=$request->input('name');
        $ingre->unit=$request->input('unit');
        $ingre->qty=$request->input('qty');
        $ingre->save();

        return response()->json($ingre);
    }
    
    public function updateDirec(Request $request)
    {
        $direc=Directions::find($request->input('Did'));
        $direc->steps=$request->input('steps');
        $direc->save();

        return response()->json($direc);
    }

    public function updateNut(Request $request)
    {
        $nut=Nutritional::find($request->input('Nid'));
        $nut->nutrient=$request->input('nutrient');
        $nut->amount=$request->input('amount');
        $nut->dri_dv=$request->input('dri_dv');
        $nut->save();

        return response()->json($nut);
    }

    public function deleteRecip(Request $request)
    {
        $direc = Recipe::find($request->input('Rid'));
        $direc->delete();

        return response()->json('deleted');
    }
    
    public function deleteIngre(Request $request)
    {
        $direc = Ingredients::find($request->input('Iid'));
        $direc->delete();

        return response()->json('deleted');
    }
    
    public function deleteDirec(Request $request)
    {
        $direc = Directions::find($request->input('Did'));
        $direc->delete();

        return response()->json('deleted');
    }
    
    public function deleteNut(Request $request)
    {
        $direc = Nutritional::find($request->input('Nid'));
        $direc->delete();

        return response()->json('deleted');
    }
    
}
