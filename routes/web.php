<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/send','Create_tickets@mails');
Route::get('/create-ticket','Create_tickets@createticket')->name('create_ticket');
Route::post('/create-ticket','Create_tickets@mails')->name('create_ticket');

// Route::view('/send','Create_ticket@mails')->name('create_ticket');

Route::group(['prefix' => 'admin'], function () {

    Auth::routes();

});

Route::get('/home', 'HomeController@index')->name('home');

