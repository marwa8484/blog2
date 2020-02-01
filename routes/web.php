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
    $user =Auth::user();
    Notification::send($user, new \App\Notifications\RegisterNotification($user));
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
