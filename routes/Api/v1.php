<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\RecipeController;
use App\Http\Controllers\Api\v1\TagController;
use App\Http\Controllers\Api\v1\CatetgoryController;

Route::prefix('v1')->group(function () {
    Route::get('categories', [CatetgoryController::class, 'index']);
    Route::get('categories/{category}', [CatetgoryController::class, 'show']);
    Route::apiResource('recipes', RecipeController::class);
    Route::get('tags', [TagController::class, 'index']);
    Route::get('tags/{tag}', [TagController::class, 'show']);
});
