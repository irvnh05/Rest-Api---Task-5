<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');
// Route::post('/post/store', 'PostController@store');

Route::prefix('post')
    ->middleware('auth:api')
    ->group( function () {
        Route::resource('article', 'API\ArticleController');
        Route::resource('category', 'API\CategoryController');
});

