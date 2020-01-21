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
Route::get('no-auth', function () {
    return response()->json(
        [
            "errors" => [
                "status" => 401,
                "message" => "Unauthenticated",
            ],
        ], 401
    );
})->name('no-auth');

// Global View Routes
Route::get('{path}', function () {
    return view('app');
})->where('path', '.*');
