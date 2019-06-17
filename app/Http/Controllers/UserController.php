<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class UserController extends Controller
{
    //login form open
    public function getsignin()
    {
      return view('user.signin');
    }
    //login form id pw checkS
    public function postsignin(Request $request)
    {
      // code...

      if (Auth::attempt(['uid'=>$request->input('uid'),'password'=>$request->input('password')])) {
        return redirect()->route('Cursor');
      }
    }

    //sign up open
    public function getsignup()
    {
      return view('user.signup');
    }
    //sign up check
    public function postsignup(Request $request)
    {
      //bcrypt password auth

      $user= new User([
        'uid'=>$request->input('uid'),
        'email'=> $request->input('email'),
        'password'=>bcrypt($request->input('password')),
        'firstname'=>$request->input('firstname'),
        'lastname'=>$request->input('lastname'),
        'sex'=>$request->input('sex')
      ]);


      $user->save();
      return redirect()->route('Cursor');
    }
    //logout
    public function logout(Request $request)
    {
      // session out
      $request->session()->flush();
      Auth::logout();
      return redirect('/cursor');
    }
}
