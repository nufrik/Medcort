<?php

namespace App\Services;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface EmployeeServiceInterface
{

    public function getAllCategories() : Collection;

    public function getAllBooks() : LengthAwarePaginator;

}
