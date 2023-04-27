<?php

namespace App\Services;

use App\Models\Books;
use Illuminate\Pagination\LengthAwarePaginator;

interface BookServiceInterface
{
    public function getBooksByCategorySlug(string $slug) : LengthAwarePaginator;

    /*public function getBookByCategorySlug(string $slug, string $bookSlug) : Books;*/

    public function getBookBySlug(string $slug) : Books;
}
