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


Route::post('/login', 'Api\AuthController@login');

// Android API
Route::get('/projects', 'Api\ProjectController@all');
Route::get('/project/categories', 'Api\CategoryController@byProject');

// Android API - New incident
Route::post('/incidents', 'Api\IncidentController@store');

// Android API - Reports
Route::get('/incidents/state', 'Api\IncidentController@stateCount');
Route::get('/projects/incident', 'Api\ProjectController@incidentCount');
Route::get('/supports/incident', 'Api\SupportController@incidentCount');

// Web API
Route::get('/proyecto/{id}/niveles', 'Admin\LevelController@byProject');
