<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function went()
    {
        return view('register');
    }
    public function next()
    {
        return view('login');
    }
    public function regis(Request $request){
        $formfield = $request->validate([
            'name'=> "required|max:50",
            'password'=> "required|min:3"
        ]);
       $user=user::create($formfield);
       if($user){
        return redirect('/login') ->with ('success',"Register success");
       }else{
        return response('Repeat user');
       }
    }
    public function login_form(Request $request){
        $formfield = $request->validate([
            'name'=> "required|max:50",
            'password'=> "required|min:3"
        ]);
        if(Auth::attempt($formfield)){
            return response('login success');
        }else{
            return response('login fail or repeat user');
        }
    }

}
