<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StidentController;
use App\Http\Controllers\TeacherController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//student
Route::get('stident',[StidentController::class, 'index']);
Route::post('stident',[StidentController::class, 'store']);
Route::put('/stident/{id}',[StidentController::class, 'update']);
Route::delete('/stident/{id}',[StidentController::class, 'destroy']);

//teacher
Route::get('teacher',[TeacherController::class, 'index']);
Route::post('teacher',[TeacherController::class, 'store']);
Route::put('/teacher/{id}',[TeacherController::class, 'update']);
Route::delete('/teacher/{id}',[TeacherController::class, 'destroy']);
