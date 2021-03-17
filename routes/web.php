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
//     return view('beranda');
// });

// Route::get('/admin', function () {
//     return view('admin/beranda');
// });

// Route::get('/admin/achievment', function () {
//     return view('admin/achievment');
// });


Route::get('/', 'UserController@index');

Route::get('/admin', 'DashboardController@index');

// Route::get('/admin/achievment', 'AchievmentController@index');
// Route::get('/admin/achievment/{id_achiev}', 'AchievmentController@show');
// Route::post('/admin/achievment', 'AchievmentController@store');


Route::resource('/admin/achievment', 'AchievmentController');

Route::resource('/admin/language', 'LanguageController');

Route::resource('/admin/profile', 'ProfileController');

Route::resource('/admin/portofolio', 'PortofolioController');
