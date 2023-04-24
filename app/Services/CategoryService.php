<?php

namespace App\Services;

use App\Models\Category;

class CategoryService implements CategoryServiceInterface
{

    public function getById($slug): Category
    {
        return Category::where('slug', $slug)->firstOrFail();
    }

    public function getByAll()
    {
        return Category::all();
    }
}
