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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['domain' => config('project.api_domain'), 'namespace' => 'Api', 'as' => 'api.', 'middleware' => []], function() {
	Route::group(['prefix' => 'v1', 'namespace' => 'v1', 'as' => 'v1.'], function() {
		Route::resource('/cares', 'Care\CaresController');
		Route::resource('/foos', 'Foo\FoosController');
		Route::resource('/pkgs', 'Pkg\PkgsController');
		Route::resource('/prods', 'Prod\ProdsController');
		Route::resource('/subscs', 'Subsc\SubscsController');
		Route::resource('/users', 'User\UsersController');
		Route::resource('/vehicles', 'Vehicle\VehiclesController');
	});
});
