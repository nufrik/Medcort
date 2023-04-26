<?php

namespace App\Services;

use Illuminate\Pagination\LengthAwarePaginator;

interface BookServiceInterface
{
    public function getBooksByCategorySlug(string $slug) : LengthAwarePaginator;

}
