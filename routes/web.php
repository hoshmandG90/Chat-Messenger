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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/login',App\Http\Controllers\Admin\login::class)->name('login');

Route::get('/register',App\Http\Controllers\Admin\register::class)->name('register');


Route::get('/friend',App\Http\Controllers\Friend::class)->name('friend');


Route::get('/profile/{user:username}',App\Http\Controllers\Admin\Profile::class)->name('profile');


Route::get('/EditProfile/{user:username}',App\Http\Controllers\Admin\EditProfile::class)->name('EditProfile');


Route::get('/Explore',App\Http\Controllers\Explore::class)->name('Explore');
