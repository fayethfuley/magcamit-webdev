<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController; 
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});


Route::get("home", function(){
    return "<h1>Home Page<h1>";
})->name('home');

Route::get("about", function(){
    return "<a href= '".route("home") ."'>Home Page </a>";
});

Route::get("user/{id}/{name}", function($id, $name){
    return "<User: " . $id . " " . $name;
});

Route::get("user/{id}", function($id){
    return "<User: " .$id;
});

Route::get("search/{id}", function($id){
    return "<a href= '".route("user") ."'>You want to search ID: ".$id." </a>";
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('/' , function(){
        return "Admin";
    });
    
    Route::get('/dashboard' , function(){
        return "Admin Dashboard";
    });

    Route::get('/settings' , function(){
        return "Admin settings";
    });

    /*
    Route::get('/profile' , function(){
        return view('admin.adminProfile', ['name' => 'Angelo']);
    });
    */

    Route::get('/profile/{id}' , function($id){
        $name = "Angelo";
        return view('admin.adminProfile', compact('id', 'name'));
    });
    
    /*
    Route::group(['prefix' => 'admin'], function(){
        Route::get('/profile/{id}', [BlogController::class, 'index']);
    });
    */
});

Route::group(['prefix' => 'user'], function(){
    Route::get('/' , function(){
        return "User Dashboard";
    });

    Route::get('/{id}' , function($id){
        return "User id: " . $id;
    });

    Route::get('/{id}/{name}' , function($id, $name){
        return "User id: " . $id . "User name: " . $name;
    });
});

Route::get('/blogs', [BlogController::class, 'retrieveBlogs']); 

Route::get('/login', [LoginController::class, 'index']);
Route::post('/submit', [LoginController::class, 'handleLogin'])->name('pages.submit');

/*
Route::fallback(function(){
    return "Route Does Not Exist";
});
*/

Route::fallback(function(){
    return "<img src='https://i.pinimg.com/originals/b4/27/04/b427046d658034d58c3f866efa6cf467.gif' height=\"359\" width=\"345\" frameborder=\"0\" scrolling=\"no\" alt='page not found'/>";
});