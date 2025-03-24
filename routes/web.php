<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $saluto = 'Ciao Mondo!';


    return view('home', compact('saluto'));
})->name('home');

Route::get("/contact", function(){
    return view('contact');
})->name('contact');

Route::get("/login", function(){
    return view('login');
})->name('login');