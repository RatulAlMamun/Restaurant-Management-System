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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*================================================================================
							FRONTEND PAGE ROUTING
=================================================================================*/

Route::get('/', 'IndexHomeController@index');
Route::get('/about', 'AboutController@about');
Route::get('/menu', 'MenuController@menu');
Route::get('/order', 'OrderController@order');
Route::get('/reservation', 'ReservationController@reservation');
Route::get('/contact', 'ContactController@contact');

Route::post('/storeorder', 'OrderController@storeorder')->name('storeorder.submit');

/*================================================================================
							FRONTEND INSERT FUNCTION ROUTING
=================================================================================*/

Route::post('/doreservation', 'ReservationController@doreservation')->name('doreservation.submit');
Route::post('/docontact', 'ContactController@docontact')->name('docontact.submit');



/*================================================================================
							ADMIN DASHBOARD PAGE ROUTING
=================================================================================*/

Route::get('/dashboard', 'Admin\DashbaordController@dashboard');
Route::get('/expense', 'Admin\ExpenseController@expense');
Route::get('/dashmenu', 'Admin\DashMenuController@dashmenu');
Route::get('/message', 'Admin\MessageController@message');
Route::get('/newadmin', 'Admin\NewAdminController@newadmin');
Route::get('/occupancy', 'Admin\OccupancyController@occupancy');
Route::get('/dashorder', 'Admin\DashOrderController@dashorder');
Route::get('/revenue', 'Admin\RevenueController@revenue');
Route::get('/staff', 'Admin\StaffController@staff');
Route::get('/tablereservation', 'Admin\TableReservationController@tablereservation');



/*================================================================================
							BACKEND INSERT FUNCTION ROUTING
=================================================================================*/

Route::post('/doaddmenu', 'Admin\DashMenuController@addfood')->name('doaddmenu.submit');

Route::post('/doaddcategory', 'Admin\DashMenuController@addcategory')->name('doaddcategory.submit');

Route::post('/doaddadmin', 'Admin\NewAdminController@doaddadmin')->name('doaddadmin.submit');

Route::post('/doaddstaff', 'Admin\StaffController@doaddstaff')->name('doaddstaff.submit');

Route::post('/doaddexpense', 'Admin\ExpenseController@doaddexpense')->name('doaddexpense.submit');

Route::post('/doaddexpensecategories', 'Admin\ExpenseController@doaddexpensecategories')->name('doaddexpensecategories.submit');


Route::post('/editmenu', 'Admin\DashMenuController@editmenu')->name('editmenu.submit');

Route::get('/removemenu/{id}', 'Admin\DashMenuController@removemenu');

Route::get('/confirm/{id}/{name}', 'Admin\DashOrderController@confirm');

Route::get('/removeorder/{id}', 'Admin\DashOrderController@removeorder');


Route::get('/approve/{id}/{name}', 'Admin\TableReservationController@approve');

Route::get('/deletereservation/{id}', 'Admin\TableReservationController@deletereservation');

Route::get('/removeexpense/{id}', 'Admin\ExpenseController@removeexpense');


Route::get('/removestaff/{id}', 'Admin\StaffController@removestaff');


Route::get('/removemessage/{id}', 'Admin\MessageController@removemessage');

Route::post('/updateprofile', 'Admin\DashbaordController@editprofile')->name('updateprofile.submit');

Route::post('/editstaff', 'Admin\StaffController@editstaff')->name('editstaff.submit');

Route::post('/editexpense', 'Admin\ExpenseController@editexpense')->name('editexpense.submit');

