<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryService implements CategoryServiceInterface
{

    public function getByAll() : Collection
    {
        return Category::all();
    }
}
