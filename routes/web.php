<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Post, Get, Post, Put, Update routes are available

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('information');
});

Route::get('/robular', function () {
    return view('formular');
});

Route::post('/data', 'FormularController@formularAuswerten');
