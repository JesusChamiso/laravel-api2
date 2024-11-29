<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\CategoryCollection;
use App\Http\Resources\v1\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CatetgoryController extends Controller {
    public function index() {
        return new CategoryCollection(Category::all());
    }

    public function show(Category $category) {
        $category = $category->load('recipes.category', 'recipes.tags', 'recipes.user');
        return new CategoryResource($category);
    }
}
