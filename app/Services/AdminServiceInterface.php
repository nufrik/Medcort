<?php

namespace App\Services;



use Illuminate\Database\Eloquent\Collection;

interface AdminServiceInterface
{
    public function getAllUsers() : Collection;

    public function getAllCategories() : Collection;

    public function getAllBooks() : Collection;
}
