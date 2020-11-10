<?php

use Illuminate\Support\Facades\Route;
use App\Finder;
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
//Route::get('/menu', 'homeController@store');
Route::get('/', 'pageController@home');

Route::get('/Home', 'pageController@home');

Route::get('/Portfolio', 'pageController@portfolio');

Route::get('/Resume', 'pageController@about');
