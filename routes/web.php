<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/about', function (){
    return view('frontend.about');
})->name('about');

Route::get('/shop', function (){
    return view('frontend.shop');
})->name('shop');

Route::get('/shop-single', function (){
    return view('frontend.shop-single');
})->name('shop-single');
