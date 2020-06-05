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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'WeatherController@index');


Route::get('/palindrome/create', 'PalindromeCheckController@create');

Route::post('/palindromeCheck', 'PalindromeCheckController@store');

Route::get('/palindromeString/create', 'PalindromeStringController@create');

Route::post('/palindromeString', 'PalindromeStringController@store');