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

Route::resource('bookmassagesave','BookmassageController');
Route::get('bookmassage', function () {

    return View::make('website.pages.bookmassage');

    return view('bookmassages.create');

});

Route::resource('bookmassages','BookmassageController');

Route::get('bookmassage', function () {
    return view('bookmassages.create');
});

Route::get('accounts', function () {
    return view('accounts.account');
});


Route::get('addaccount', function () {
    return view('accounts.addaccount');
});
Route::resource('massagereservations','BookmassageController');

Route::get('massagereservations', function () {
    return view('massagereservation.massagereservation');
});

Route::get('cabins', function () {
    return view('cabins.cabins');
});

Route::get('addcabin', function () {
    return view('cabins.addcabin');
});

Route::get('addstaff', function () {
    return view('staffs.addstaff');
});
Route::resource('staffs','StaffController');

Route::get('massagetype', function () {
    return view('massagetype.massagetype');
});

Route::get('addmassagetype', function () {
    return view('massagetype.addmassagetype');
});

Route::get('packages', function () {
    return view('packages.packages');
});
Route::resource('packages','PackageController');

Route::get('branches', function () {
    return view('branches.branches');
});

Route::get('addbranch', function () {
    return view('branches.addbranch');
});

Route::get('companyinformation', function () {
    return view('companyinformation.companyinformation');
});


Route::get('addpackage', function () {
    return view('packages.addpackage');
});

Route::get('nuatthaiaboutus', function () {
    return view('website.pages.aboutus');
});

Route::get('nuatthaireservation', function () {
    return view('website.pages.reservation');
});

Route::get('bookingsummary', function () {
    return view('website.pages.bookingsummary');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
