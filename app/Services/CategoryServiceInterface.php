<?php

namespace App\Services;

use App\Models\Category;


interface CategoryServiceInterface
{
    public function getById($slug) : Category;

    public function getByAll();
}
