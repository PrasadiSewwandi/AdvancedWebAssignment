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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// OAuth Routes: edited by Savindi
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/lecturer', 'LecturersController@index');
Route::get('/student', 'StudentsController@index');
Route::group(['middleware'=>['auth','admin']], function()
{
	Route::get('/admin', function () {
    return view('admin');
});

});

// Route::group(['middleware' => ['auth', 'admin']], function() {
//     Route::get('/admin', function () {
//         return view('admin');
//     });    
// });
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/user','AdminController@user')->name('admin');
Route::get('/admin/user/destroy/{id}','AdminController@destroy')->name('admin');
Route::get('/admin/user/updateAdmin/{id}/{role}','AdminController@updateAdmin')->name('admin');


