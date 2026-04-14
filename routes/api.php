<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// White Label Network Receiver API Routes
Route::get('/health', [\App\Http\Controllers\NetworkController::class, 'health']);

Route::middleware('sync.token')->group(function () {
    Route::post('/system/control', [\App\Http\Controllers\NetworkController::class, 'control']);
});
