<?php

namespace App\Services;


use App\Models\Books;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class AdminService implements AdminServiceInterface
{
    public function getAllUsers() : Collection
    {
        return User::all();
    }

    public function getAllCategories() : Collection
    {
        return Category::all();
    }

    public function getAllBooks() : Collection
    {
        return Books::all();
    }
}
