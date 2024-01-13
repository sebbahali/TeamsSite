<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Laraturst Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'prefix' => config('laratrust.panel.path'),
    'namespace' => 'Laratrust\Http\Controllers',
    'middleware' => config('laratrust.panel.middleware', 'web'),
], function () {
    Route::resource('/permissions', 'PermissionsController')
    ->only(['index', 'edit', 'update']);

    Route::resource('/roles', 'RolesController');

    Route::resource('/roles-assignment', 'RolesAssignmentController')
        ->only(['index', 'edit', 'update']);
});
