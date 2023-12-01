<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
                    return redirect('login');
        }
        else
        {
            echo"error";
        }


    }
    public function login()
    {
        if(!Auth::check()){
            return view('login');
        }else{
            return redirect()->route('dash');
        }

    }
    public function authentication(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password],true)){
            return redirect()->route('dash');
        }else{
            echo "password wrong";
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('res');
    }



}
