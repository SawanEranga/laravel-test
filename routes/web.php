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

//Route::get('/send','Create_tickets@mails');
Route::get('/create-ticket-view','Create_tickets@create_ticket_view')->name('create_ticket_view');
Route::post('/create-ticket-save','Create_tickets@create_ticket_save')->name('create_ticket_save');

// Route::view('/send','Create_ticket@mails')->name('create_ticket');

Route::group(['prefix' => 'admin'], function () {

    Auth::routes();
    // Route::get('/reply-ticket', 'Replyticket@replyticket')->name('replyticket');
    Route::get('home', ['uses'=>'HomeController@index', 'as'=>'home.index']);
    // Route::get('home', ['uses'=>'HomeController@index']);
});

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view-ticket', 'view_ticket@viewticket')->name('viewticket');
Route::post('/get-ticket-data', 'view_ticket@get_ticket_data')->name('get_ticket_data');


