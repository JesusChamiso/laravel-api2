<?php

use App\Http\Controllers\Api\v2\RecipeController;
use Illuminate\Support\Facades\Route;

Route::prefix('v2')->group(function () {
    Route::apiResource('recipes', RecipeController::class);
});
