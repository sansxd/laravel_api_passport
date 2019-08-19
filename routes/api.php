<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function () {
    /* esta ruta va asi http: //127.0.0.1:8000/api/v1/user
    con un prefix de version, y con el middleware de auth:api,
    si no esta en el middleware , lo redireccionara a login */
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    //api de articulos
    Route::apiResources([
        'articles' => 'API\ArticleController',
    ]);
});

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('register', 'AuthController@register');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

Route::fallback(function () {
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact sergioans95@hotmail.com'], 404);
});
