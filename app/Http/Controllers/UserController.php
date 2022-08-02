<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    //
    public function index()
    {
        return response()->json(['message' => "Welcome to API test"]);
    }  
       
 
    public function register()
    {
        // dd($request ->all());

       $users = User::create([
            'Name' => request('name'),
            'Email' => request('email'),
            'Password' => request('password'),
        ]);

        return response()->json(['user' => $users]);
        // $validator = Validator::make($request, [
        //     'name' => 'required|min:3|max:50', 
        //     'password' => 'required|min:6', 
        //     'password_confirmation' => 'required|same:password|min:6', // this will check password                           
        // ]);
        // if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        // {
            
        //     return back()->withInput()->withErrors($validator);
            
        // }
        // else
        // {
        //     dd($request ->all());
        // }  
      
        // return response()->json(['message' => "You have successfully registered"]);
        // $validator = Validator::make($request, [
        //     'name' => 'required|min:3|max:50', 
        //     'password' => 'required|min:6', 
        //     'password_confirmation' => 'required|same:password|min:6', // this will check password                           
        // ]);
        // if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        // {
            
        //     return back()->withInput()->withErrors($validator);
            
        // }
        // else
        // {
        //     return response()->json(["status"=>true,"message"=>"Form submitted successfully"]);
        // }  
    }
   public function login(){

   }

   public function update(){

   }

   public function getUser(){

   }

   public function getUsers(){

   }
    
}
