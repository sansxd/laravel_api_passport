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
//ruta inicial
Route::get('/', 'Web\AppController@getApp');
//ruta de login
// Route::middleware(['guest'])->group(function () {
//     Route::get('/login', 'Web\AppController@getLogin')
//         ->name('login');
//     //{social} es la variable
//     Route::get('/login/{social}', 'Web\AuthenticationController@getSocialRedirect');

//     Route::get('/login/{social}/callback', 'Web\AuthenticationController@getSocialCallback');

// });


