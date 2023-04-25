<?php

namespace App\Services;

use App\Models\Category;


interface BookServiceInterface
{
    public function getBooks($slug);

}
