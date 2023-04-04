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
    return redirect('blinke');
});

Route::get('/blinke', function(){
    return view('index');
})->name('blinke');

Route::get('/widi', function(){
    return view('index');
})->name('widi');

Route::get('/personal', function(){
    return view('index');
})->name('personal');
