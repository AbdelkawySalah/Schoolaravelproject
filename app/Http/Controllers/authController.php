<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;
class authController extends Controller
{
    //
    public function login(){
        return view("dashboard.login");
      }

      public function postlogin(Request $request){
        $val=$request->validate([
          'email'=>'required | email',
          'password'=>'required'
      ]);
  
      $user_data=$request->only("email","password");
      // dd($user_data);
       if(Auth::attempt($user_data)){
         return redirect("/dashboard");
       }
       else{
  
        Session::flash('message',' User Not Registerd');
        return redirect("/login");
       }
      }

      public function logout(){
        Auth::logout();
        return redirect("/login");
  
      }

      public function register(){
        return view("dashboard.register");
      }

      public function postregister(Request $request){
        $val=$request->validate([
            'username'=>'required',
            'email'=>'required | email',
            'password'=>'required|confirmed'
        ]);
         // dd($val);
         // dd($request->only("username","email","password"));
        // $user_data=$request->only("username","email","password");
         
        $user=new User();
        $user->name=$request->username;
        $user->email=$request->email;
        $user->password=hash::make($request->password);
       // $user->save();
        if($user->save()){
          Session::flash('message','User Created SucessFul');
        }else{
          Session::flash('message','Error User Not Created');
        }
    
        return redirect("/login");
    
        }
       }



