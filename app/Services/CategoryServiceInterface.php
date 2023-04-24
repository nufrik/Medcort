<?php

namespace App\Services;

use App\Models\Category;


interface CategoryServiceInterface
{
    public function getById(int $id) : Category;

    public function getByAll();
}
