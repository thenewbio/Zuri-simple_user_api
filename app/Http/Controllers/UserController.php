<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //
    public function loginstatus()
    {
        return view('/login');
     
    } 
    public function login(Request $request) {
        $data =$request->input();
        $password = $request->input('password');
        $user = User::where('Email', $data['email'])->first();
        $userPass = User::where('Password',$password)->first();
    
        if($user && $userPass){
        $request->session()-> put('users', $data['email'],);
        return response()->json([ session('users') => "Successfully login"]);
        
        }
        else {
            echo " <script>alert('Password or Email do not match any user');
        window.location='/api/log';
    </script>";
        }
    }
       
    public function register(Request $request)
    {
        // dd($request ->all());
        $email =$request->input('email');
        $name = $request->input('name');
        $userEmail = User::where('Email',$email)->first();
        $userName = User::where('Name',$name)->first();

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

   public function update(User $user){
    return view('update', ['user'=> $user]);
   }
  public function updateUser(User $request, $id){
        //    dd(request()->all());
    $request->replicate([
        'Name' => 'required',
        'Email' => 'required',
    ]);
    $user = User::find($id);
    $user->update([
        'Name' => request('name'),
        'Email' => request('email'),
    ]);

    return response()->json(['Success' => $user]);
  }

   public function getUser(){
    return $this->hasid(User::class);
     
    // User::find($id);
    // dd(request()->all());
   }

   public function delete($id){
   
    $user = User::find($id);    
    $user->delete();
    return response()->json(['Successfully deleted' => $user]);
   }

   public function getUsers(){
   
    $users = User::all();

    return view('/users', ['users' => $users]);
}
    
}
