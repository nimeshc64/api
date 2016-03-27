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
            $token='vf7B1fg'.$nextToken.'zYA9NZA';
        }
        else{
            $token='vf7B1fgzYA9NZA';
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
        return view('Home.login');
    }

    public function log(Request $request)
    {
        $user=User::where('email','=',$request->Input('email'))->first();
        $decrypted = Crypt::decrypt($user->password);

        //$email=$request->Input('email');
        //$password=$request->Input('password');
        //$status=User::where('email','=',$email)->where('password','=',$decrypted)->first();
        if($decrypted==$request->Input('password'))
        {
            session_start();

            $_SESSION['userid'] = $user->id;
            $_SESSION['token'] = $user->token;
            return redirect('user');
        }
        else{
            return redirect('/');
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
        return view('Home.form',['us'=>$user]);
    }
}
