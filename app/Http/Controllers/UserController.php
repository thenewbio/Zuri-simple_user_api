<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    //
    public function login(Request $request)
    {
        $email =$request->input('email');
        $password = $request->input('password');
        $user = User::where('email',$email && 'password', $password)->first();
    
        if($user){
          return;
        }
        else {
            return view('/login');
        }
  
     
    }  
       
 
    public function register(Request $request)
    {
        // dd($request ->all());
        $email =$request->input('email');
        $name = $request->input('name');
        $userEmail = User::where('email',$email)->first();
        $userName = User::where('name',$name)->first();

       $password = $request->input('password');
       $passwordRepeat = $request->input('password-repeat');

     if ($userEmail){
        echo " <script>alert('Email Chosen. please choose another email ');
        window.location='/';
    </script>";
     } else if($userName) {
        echo " <script>alert('Name already exist ');
        window.location='/';
    </script>";
     }
  else if($password == $passwordRepeat) {
        $users = User::create([
            'Name' => request('name'),
            'Email' => request('email'),
            'Password' => request('password'),
        ]);
        return response()->json(["ID" => $users->id, "NAME" => $users->Name, "EMAIL" => $users->Email]);
       }
       else {
        echo " <script>alert('Password does not match');
        window.location='/';
    </script>";
       }
}

   public function update(){

   }

   public function getUser(){

   }

   public function getUsers(){
   
    $users = User::all();

    return view('/users', ['users' => $users]);
}
    
}
