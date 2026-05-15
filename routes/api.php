<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookingApiController;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('bookings', BookingApiController::class);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');