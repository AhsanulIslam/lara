<?php

use Illuminate\Support\Facades\Route;


// route class :: scope resolution operator ... get static function call ... inside (function/closer)
// Route::get('/', function () {
//     return view('welcome');     //view function... node a view ar replace a render celo
// });


Route::get('/', function () {
    return view('welcome'); 
});


Route::get('/login', function(){
        return view('login.index'); 
});