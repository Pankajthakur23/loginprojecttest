<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function register(){
        return view('register');
    }
    public function store(Request $request)
    {

        $request->validate([
           'name'=>'required',
           'email'=>'email',
           'number'=>'integer',
           'password'=>'required',
        ]);
        $register=User::create($request->all());
        if($register)
        {
            echo "success";
        }
        else
        {
            echo"error";
        }
//        return redirect('login');

    }
    public function login()
    {
        return view('login');
    }
    public function authenticate()
    {

    }
}
