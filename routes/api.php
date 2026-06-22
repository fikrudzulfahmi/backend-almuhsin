<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

// Jalur Login (Bisa diakses umum tanpa token)
Route::post('/login', [AuthController::class, 'login']);

// Jalur yang butuh Token (Diproteksi oleh Sanctum)
Route::middleware('auth:sanctum')->group(function () {

    // Mengambil data admin yang sedang login saat ini
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Jalur Logout
    Route::post('/logout', [AuthController::class, 'logout']);
});
