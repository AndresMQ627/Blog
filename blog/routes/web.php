<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/contacto", function(){
    return view('contacto');
});

Route::get("/about", function(){
    return view('about');
});

Route::get("/post", function(){
    return view('post');
});

Route::get("/dashboard", function(){
    return view('admin.dashboard');
});

Route::group(['prefix'=>'dashboard'],function(){
    Route::get("/",function(){
        return view('admin.dashboard');
    });
    Route::get("/users",[UsersController::class,'getUsers']);
});

