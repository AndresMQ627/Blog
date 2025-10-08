<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller

{
    public function __construct() {
        $this->middleware('auth');
    }
    public function getUsers (){
        /*Select * From Users */
        $data = User::all();
        //dd($data);
        return view("admin.users")
        ->with('usuarios',$data);
    }
    public function createUsers(Request $request){
        // dd($request->email);
        $request->validate([
            "name"=>'required|min:3',
            "username"=>'required|min:3|unique:users,username',
            "email"=>'required|email|unique:users,email',
            "password"=>'required|min:4',
            "password2"=>'required|min:4|same:password'
        ]);

        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->username=$request->username;
        $user->password=Hash::make($request->password);
        $user->img="default.jpg";
        $user->save();
        return redirect()
           ->back()
           ->with('success', "Usuario insertado correctamente");

    }
}
