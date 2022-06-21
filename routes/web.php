<?php
//use Illuminate\Support\Facades\Http;
//$response = Http::get('http://example.com');

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

Route::get('/', 'HomePageController@index')->name('index');
Route::get('/share','HomePageController@shareSocial');

//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\
////////////////////////////////////////////    Update Profile     \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    Route::get('update/profile', 'Auth\AuthController@updateProfile')->name('update.profile');
    Route::get('user/update/profile', 'Auth\AuthController@updateProfileStore')->name('update.profile.store');

////////////////////////////////////////////    Register     \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('/sign-in', 'Auth\AuthController@showPage')->name('register');
Route::get('/user/register', 'Auth\AuthController@postRegister' )->name('register.store');
Route::get('/user/register/ajax','Auth\AuthController@postRegisterAjax')->name('register.store.ajax');

////////////////////////////////////////////    Login     \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('/login', 'Auth\AuthController@login')->name('login');
Route::get('user/login','Auth\AuthController@postlogin')->name('login.store');
Route::get('user/login/ajax','Auth\AuthController@postloginAjax')->name('login.store.ajax');

////////////////////////////////////////////    Forget Password     \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('/forget-pass', 'Auth\AuthController@forgetPassword')->name('forget.pass');
Route::get('user/forget-pass', 'Auth\AuthController@postForgetPassword')->name('forget.pass.send');
////////////////////////////////////////////    Logout     \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('user/logout', 'Auth\AuthController@logout')->name('logout');

////////////////////////////////////////////   Orders     \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

Route::get('/orders', 'OrdersController@index')->name('orders');
Route::get('/details-order/{id}', 'OrdersController@orderDetails')->name('details.order');
Route::get('cancel/order', 'OrdersController@cancelOrder')->name('cancel.order');
Route::get('/rating-popup', function () {return view('front-end.rating-popup');})->name('rating-popup');
Route::get('/rating/create','OrdersController@createRating' )->name('rating.create');


////////////////////////////////////////////    Static page   \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('/faq', 'FaqController@index')->name('faq');
Route::get('/contact-us', 'ContactUsController@index')->name('contact-us');
Route::get('/about-us', 'AboutUsController@index')->name('about-us');

////////////////////////////////////////////    new order   \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

Route::get('/new-order', 'NewOrdersController@newOrder')->name('new.order');
Route::get('/get-new-order', 'NewOrdersController@getBrand')->name('get.new.order');
Route::get('get/color','NewOrdersController@getColor')->name('get.color');
Route::get('check/offer','NewOrdersController@checkOffer')->name('check.offer');
Route::get('get/brand','NewOrdersController@getBrands')->name('get.brand');
Route::get('get/device','NewOrdersController@getDeviceFromBrand')->name('get.device');
Route::get('get/appointment','NewOrdersController@getAppointments')->name('get.appointment');
Route::get('get/days','NewOrdersController@getDays')->name('get.days');
Route::get('get/issues','NewOrdersController@getIssuesFromDevice')->name('get.issues');
Route::get('get/price','NewOrdersController@getPrice')->name('get.price');
Route::get('get/region','NewOrdersController@getRegion')->name('get.region');
Route::get('post/order','NewOrdersController@postOrder')->name('get.post.order');
Route::get('successfully-order','OrdersController@successfullyOrder')->name('successfully.order');

Route::get('/login-popup', function () {return view('auth.login-popup');})->name('login-popup');
Route::get('/rating-popup', function () {return view('front-end.rating-popup');})->name('rating-Result');
Route::get('/successfully/register', function () {return view('front-end.successfully-sign-in');})->name('successfully-register');

