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

Route::get('dashboard', function () {
    return view('admin.pages.home');
});

Route::get('nuatthaihome', function () {
    return view('website.pages.home');
});

Route::get('bookmassage', function () {
    return view('website.pages.bookmassage');
});


Route::get('accounts', function () {
    return view('admin.pages.accounts.account');
});

Route::get('addaccount', function () {
    return view('admin.pages.accounts.addaccount');
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

Route::get('nuatthaiaboutus', function () {
    return view('website.pages.aboutus');
});

Route::get('nuatthaireservation', function () {
    return view('website.pages.reservation');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
