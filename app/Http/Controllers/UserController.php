<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //login form open
    public function getsignin()
    {
      return view('user.signin');
    }
    //login form id pw check
    public function postsignin(Request $request)
    {


    }

    //sign up open
    public function getsignup()
    {
      return view('user.signup');
    }
    //sign up check
    public function postsignup(Request $request)
    {

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
    public function logout()
    {
      Auth::logout();
      return redirect()->route('Cursor');
    }
}
