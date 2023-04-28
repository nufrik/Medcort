<?php

namespace App\Services;

use App\Http\Requests\Category\CreateRequest;
use App\Http\Requests\Category\EditRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryService implements CategoryServiceInterface
{

    public function getByAll() : Collection
    {
        return Category::all();
    }

    public function createCategory(CreateRequest $request) : bool
    {
        $data = $request->validated();
        $translit = str_slug($data['title']);
        $category = new Category();
        $category->title = $request->input('title');
        $category->slug = $translit;

        return $category->save();
    }

    public function editCategoryById(int $id, EditRequest $request) : bool
    {
        $category = Category::findOrFail($id);

        $data = $request->validated();
        $translit = str_slug($data['title']);

        $category->title = $request->input('title');
        $category->slug = $translit;

        return $category->save();
    }

    public function deleteCategoryById(int $id) : bool
    {
        return Category::destroy($id);
    }
}
