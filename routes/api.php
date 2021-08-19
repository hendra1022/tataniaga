<?php

use App\Http\Controllers\MaritalStatusController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TarifPajakPenghasilanController;
use App\Http\Controllers\UserController;
use App\Models\Marital_Status;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [UserController::class, 'login']);

Route::get('user', [UserController::class, 'index']);
Route::post('user',[UserController::class, 'create']);
Route::put('/user/{id_user}',[UserController::class, 'update']);
Route::delete('/user/{id_user}',[UserController::class, 'delete']);


Route::get('position', [PositionController::class, 'index']);
Route::get('role', [RolesController::class, 'index']);
Route::get('marital', [MaritalStatusController::class, 'index']);
Route::get('pajak', [TarifPajakPenghasilanController::class, 'index']);
