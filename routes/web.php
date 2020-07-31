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
// Route::get('/send',function(){

//     echo "Email has been sent";
// });
Route::get('/send','Create_ticket@mails');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
