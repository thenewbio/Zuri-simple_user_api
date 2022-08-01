<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class UserController extends Controller
{

    //
    public function index()
    {
        return response()->json(['message' => "Welcome to API test"]);
    }  
       
 
    public function register(Request $request)
    {
       
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
