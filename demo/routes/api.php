<?php

use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\TrackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/students',StudentController::class);
Route::apiResource('/tracks',TrackController::class);

// php artisan route:list  => to get All Routes
/**
*  GET|HEAD        api/students ........................ students.index › Api\StudentController@index
*   POST            api/students ........................ students.store › Api\StudentController@store
*   GET|HEAD        api/students/{student} ................ students.show › Api\StudentController@show
*   PUT|PATCH       api/students/{student} ............ students.update › Api\StudentController@update
*   DELETE          api/students/{student} .......... students.destroy › Api\StudentController@destroy

 */
// http://127.0.0.1:8000/api/students


