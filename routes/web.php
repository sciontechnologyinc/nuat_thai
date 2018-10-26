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
    return view('home.index');
});

Route::post('bookmassage/update/{id}','BookmassageController@updateStatus');


Route::get('paypalform', function () {
    return view('paywithpaypal');
});

Route::post('paypal','PaymentController@payWithpaypal');
Route::get('status','PaymentController@getPaymentStatus');



Route::get('nt_admin', function () {
    return view('auth.adminlogin');
});

Route::resource('dashboard','DashboardController');

Route::get('nuatthaihome', function () {
    return view('home.index');
});

Route::get('nuatthaivirtualtour', function () {
    return view('website.pages.virtualtour');
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
Route::resource('accounts','AccountController');


Route::get('edit', function () {
    return view('accounts.editaccount');
});
Route::resource('massagereservations','BookmassageController');

Route::get('massagereservations', function () {
    return view('massagereservation.massagereservation');
});

Route::get('cabins', function () {
    return view('cabins.cabins');
});
Route::resource('cabins','CabinController');


Route::get('addcabin', function () {
    return view('cabins.addcabin');
});

Route::get('addstaff', function () {
    return view('staffs.addstaff');
});
Route::resource('staffs','StaffController');

Route::get('massagetypes', function () {
    return view('massagetypes.massagetypes');
});

Route::get('addmassagetype', function () {
    return view('massagetypes.addmassagetype');
});
Route::resource('massagetypes','MassagetypeController');

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
Route::resource('branches','BranchController');


Route::get('companyinformation', function () {
    return view('companyinformation.companyinformation');
});

Route::get('editcompanyinformation', function () {
    return view('companyinformation.editcompanyinformation');
});

Route::get('addpackage', function () {
    return view('packages.addpackage');
});

Route::get('addpromo', function () {
    return view('promotions.addpromo');
});
Route::resource('promotions', 'PromotionController');


Route::get('nuatthaiaboutus', function () {
    return view('website.pages.aboutus');
});

Route::get('nuatthaireservation', function () {
    return view('website.pages.reservation');
});


Route::get('bookingsummary', function () {
    return view('website.pages.bookingsummary');
});
Route::get('profile', function () {
    return view('website.pages.profile');
});


Auth::routes();
Route::get('bookmassages','BookmassageController@index');
Route::post('bookmassages/update','BookmassageController@update');
Route::get('bookmassages/create','PackageController@packagesdropdown');
Route::get('website/pages/reservation','BookmassageController@reservation');
Route::get('website/pages/allreservation','BookmassageController@allreservation');
Route::get('website/pages/services','PackageController@services');
Route::get('website/pages/profile','ProfileController@index');

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/home', [
    'uses' => 'LoginController@login',
    'as'   => 'home.index'
]);

Route::group(['middleware' => 'auth'], function(){
    Route::get('home.index', function(){
          return view('home.index');
    })->name('home');

    Route::get('dashboard.index', function(){
        return view('dashboard.index');
    })->name('dashboard');

});


Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);