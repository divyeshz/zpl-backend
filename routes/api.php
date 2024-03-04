<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('API')->group(function () {

    Route::controller('AuthController')->group(function () {
        Route::post('login', 'login');
    });

    Route::group(['middleware' => ['auth:sanctum']], function () {

        Route::controller('AuthController')->group(function () {
            Route::post('logout', 'logout');
        });

        Route::controller('TeamController')->prefix('team')->group(function () {
            Route::post('create', 'create');
            Route::get('edit/{id}', 'edit');
            Route::post('update', 'update');
            Route::get('delete/{id}', 'delete');
        });

        Route::controller('UserController')->prefix('user')->group(function () {
            Route::get('edit/{id}', 'edit');
            Route::post('update', 'update');
        });
    });
});
