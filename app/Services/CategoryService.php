<?php

namespace App\Services;

use App\Models\Category;

class CategoryService implements CategoryServiceInterface
{

    public function getById(int $id): Category
    {
        return Category::where('id', $id)->firstOrFail();
    }

    public function getByAll()
    {
        return Category::all();
    }
}
