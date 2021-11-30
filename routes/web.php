<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserProfileController;




// Route::get('/home',function(){
//     return "Welcome to laravel 8";
// });

// Route::get('welcome/{name?}',function($name="Guest"){
//     return "Welcome,".$name;

// });


// Route::permanentredirect('/','home');

Route::view('/','welcome',['name'=>'Imran Qasim']);

Route::get('welcome', [WelcomeController::class, 'welcome']);

// Route::get('goodbye/{name?}', [WelcomeController::class, 'goodbye']);

Route::resource('post',PostController::class);

Route::resource('profile',UserProfileController::class);