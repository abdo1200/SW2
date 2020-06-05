<?php

use Illuminate\Support\Facades\Auth;
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
// gust home without auth
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//home page for users
Route::get('/home', 'HomeController@index')->name('home');

//admin routes

//admin view users
Route::get('/admin/viewuser.blade.php', 'adminController@viewusers')->name('viewusers');
//admin delete user
Route::delete('/admin/{id}', 'adminController@delete')->name("admin.delete");
//admin view rooms
Route::get('/admin/viewrooms.blade.php', 'adminController@viewrooms')->name('viewrooms');
//admin change room status
Route::put('/admin/viewrooms.blade.php/{id}', 'adminController@changestatus');

//user routes

//user view profile
Route::get('/user/viewprofile.blade.php', 'usercontroller@viewprofile')->name('viewprofile');
//user edit profile
Route::get('/user/editprofile.blade.php', 'usercontroller@editprofile')->name('editprofile');
Route::put('/user/viewprofile.blade.php', 'usercontroller@update');


//reservaion routes

//add reservation
Route::get('/user/booking.blade.php', 'reservationcontroller@bookingview')->name('bookingview');
Route::put('/home', 'reservationcontroller@booking');


