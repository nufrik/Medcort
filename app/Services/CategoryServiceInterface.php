<?php

namespace App\Services;


use App\Http\Requests\Category\CreateRequest;
use App\Http\Requests\Category\EditRequest;
use Illuminate\Database\Eloquent\Collection;

interface CategoryServiceInterface
{
    public function getByAll() : Collection;

    public function createCategory(CreateRequest $request) : bool;

    public function editCategoryById(int $id, EditRequest $request) : bool;

    public function deleteCategoryById(int $id) : bool;
}
