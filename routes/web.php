<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    //return view('welcome');
    return "Aboutus page";
});

Route::get('/contact', function () {
    return "Contactus page";
});

Route::get('/post/{id}/{name}', function ($id, $name) {
    return "This is the post number: " . $id .  " by " . $name;
})->where('name', '[a-zA-Z]+');
