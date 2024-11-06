<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\RegisterOrtController@index');


Route::prefix('extras/')->group(function () {
    Route::prefix('labels/')->group(function () {
        Route::get('estados', 'App\Http\Controllers\ExtrasController@Federal_state');
        Route::get('municipios', 'App\Http\Controllers\ExtrasController@Municipalities');
        Route::get('parroquias', 'App\Http\Controllers\ExtrasController@Parishes');
        Route::get('estados', 'App\Http\Controllers\ExtrasController@Federal_state');
        Route::get('CellPhoneAreaCode', 'App\Http\Controllers\ExtrasController@CellPhoneAreaCode');
        Route::get('PhoneAreaCode', 'App\Http\Controllers\ExtrasController@PhoneAreaCode');

    });
});
Route::resource('register_ort', App\Http\Controllers\RegisterOrtController::class);
