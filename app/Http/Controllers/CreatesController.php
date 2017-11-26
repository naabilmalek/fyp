<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;


class CreatesController extends Controller
{
    public function add(Request $request){
    	$this->validate($request, [
    		'name' => 'required',
    		'emailRegister' => 'required',
    		'passwordSignUp' => 'required'

    	]);

    	$articles = new Article;
    	$articles -> fullname = $request -> input('name');
    	$articles -> email = $request -> input('emailRegister');
    	$articles -> password = $request -> input('passwordSignUp');
    	$articles -> save();
    	return redirect('/register')-> with ('info', 'Successfully Registered!');

    }

    public function signIn(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',

        ]);

        $fullname = Input::get('email');
        $password = Input::get('password');
            if (Auth::attempt(array('user_name' => $fullname, 'password' => $password))){
            return redirect('/register');
            }
            else {        
                return "Wrong Credentials";
            }

        return redirect('/register');
    }
}
