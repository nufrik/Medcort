<?php

namespace App\Services;


use App\Models\Books;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class EmployeeService implements EmployeeServiceInterface
{

    public function getAllCategories() : Collection
    {
        return Category::all();
    }

    public function getAllBooks() : LengthAwarePaginator
    {
        $books = Books::paginate(10);

        return $books;
    }

}
