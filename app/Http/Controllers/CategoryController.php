<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CreateRequest;
use App\Http\Requests\Category\EditRequest;
use App\Models\Category;
use App\Services\CategoryServiceInterface;


class CategoryController extends Controller
{
    private CategoryServiceInterface $categoryService;

    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }


    public function showAll()
    {
        return view('home', [
           'categories' => $this->categoryService->getByAll(),
        ]);
    }

    public function createForm(CreateRequest $request)
    {
        if($request->has('title')) {
            $this->categoryService->createCategory($request);
            return redirect()->route('admin.categories');
        }
        return view('new-category');
    }

    public function editCategory(int $id, EditRequest $request)
    {
        if($request->has('title')) {
            $this->categoryService->editCategoryById($id, $request);
            return redirect()->route('admin.categories');
        }
        $category = Category::findOrFail($id);
        return view('edit-category',[
            'category' => $category,
        ]);
    }

    public function deleteCategory(int $id)
    {
        $this->categoryService->deleteCategoryById($id);
        return redirect()->route('admin.categories');
    }
}
