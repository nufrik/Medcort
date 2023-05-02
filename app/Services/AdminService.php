<?php

namespace App\Services;


use App\Models\Books;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

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

    public function getAllBooks() : LengthAwarePaginator
    {
        $books = Books::paginate(10);

        return $books;
    }

    public function changeUserRoleById($id) : bool
    {
        $user = User::findOrfail($id);

        if($user->role_id == 1){
            $user->role_id = 2;
        }elseif($user->role_id == 2){
            $user->role_id = 1;
        }
        return $user->save();
    }

    public function deleteUserById(int $id) : bool
    {
        return User::destroy($id);
    }
}
