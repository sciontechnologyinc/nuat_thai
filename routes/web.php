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
    return view('admin.pages.home');
});

Route::get('dashboard', function () {
    return view('admin.pages.home');
});

Route::get('nuatthaihome', function () {
    return view('website.pages.home');
});

Route::resource('bookmassagesave','BookmassageController');
Route::get('bookmassage', function () {
<<<<<<< HEAD
    return View::make('website.pages.bookmassage');
=======
    return view('bookmassages.create');
>>>>>>> 0b4b90175dae78ce2791873253bcb033ff2db097
});

Route::resource('bookmassages','BookmassageController');


Route::get('accounts', function () {
    return view('admin.pages.accounts.account');
});

Route::get('addaccount', function () {
    return view('admin.pages.accounts.addaccount');
});
Route::resource('massagereservations','BookmassageController');

Route::get('massagereservations', function () {
    return view('admin.pages.massagereservation.massagereservation');
});
Route::get('cabins', function () {
    return view('admin.pages.cabins.cabins');
});

Route::get('addcabin', function () {
    return view('admin.pages.cabins.addcabin');
});

Route::get('therapists', function () {
    return view('admin.pages.therapists.therapists');
});

Route::get('addtherapist', function () {
    return view('admin.pages.therapists.addtherapist');
});

Route::get('massagetype', function () {
    return view('admin.pages.massagetype.massagetype');
});

Route::get('addmassagetype', function () {
    return view('admin.pages.massagetype.addmassagetype');
});

Route::get('packages', function () {
    return view('admin.pages.packages.packages');
});

Route::get('addpackage', function () {
    return view('admin.pages.packages.addpackage');
});

Route::get('nuatthaiaboutus', function () {
    return view('website.pages.aboutus');
});

Route::get('nuatthaireservation', function () {
    return view('website.pages.reservation');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
