<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------

 */
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::apiResources([
    'articles' => 'API\ArticleController',
]);

Route::group(['prefix' => 'v1', 'middleware' => ['auth:api']], function () {
    /* esta ruta va asi http: //127.0.0.1:8000/api/v1/user
    con un prefix de version, y con el middleware de auth:api,
    si no esta en el middleware , lo redireccionara a login */
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    //api crud de articulos //127.0.0.1:8000/api/v1/articles
    // Route::apiResources([
    //     'articles' => 'API\ArticleController',
    // ]);
});
// Route::apiResources([
//     'articles' => 'API\ArticleController',
// ]);

Route::group([
    'prefix' => 'auth',
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('register', 'AuthController@register');

    Route::group([
        'middleware' => 'auth:api',
    ], function () {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

//ruta Básicamente, si ninguna ruta coincide,
//la función de fallback es una forma de anular la
//página 404 predeterminada e introducir una lógica adicional.
// Así es como funciona , aqui devolvemos una resspuesta Json con http 404
Route::fallback(function () {
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact sergioans95@hotmail.com'], 404);
});
