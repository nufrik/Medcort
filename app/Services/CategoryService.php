<?php

namespace App\Services;

use App\Models\Category;

class CategoryService implements CategoryServiceInterface
{

    public function getByAll()
    {
        return Category::all();
    }
}
