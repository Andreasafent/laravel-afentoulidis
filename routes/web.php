<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/user/{user_id}', function ($user_id) {
    return view('user', data:[
        'user_id' => $user_id
    ]);
});


