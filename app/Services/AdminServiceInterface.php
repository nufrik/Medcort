<?php

namespace App\Services;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface AdminServiceInterface
{
    public function getAllUsers() : Collection;

    public function getAllCategories() : Collection;

    public function getAllBooks() : LengthAwarePaginator;

    public function changeUserRoleById(int $id) : bool;

    public function deleteUserById(int $id) : bool;
}
