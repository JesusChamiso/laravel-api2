<?php

use App\Http\Controllers\Api\LoginControler;
use Illuminate\Support\Facades\Route;

Route::post('login', [LoginControler::class, 'store']);
Route::middleware('auth:sanctum')->group(function () {
    require __DIR__ . '/Api/v1.php';
    require __DIR__ . '/Api/v2.php';
});
