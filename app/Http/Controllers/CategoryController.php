<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CreateRequest;
use App\Http\Requests\Category\EditRequest;
use App\Models\Category;
use App\Services\CategoryServiceInterface;
use Illuminate\Support\Facades\Auth;


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
            if(Auth::user()->role_id == 3){
                return redirect()->route('admin.categories');
            } else {
                return redirect()->route('employee.categories');
            }

        }
        return view('new-category');
    }

    public function editCategory(int $id, EditRequest $request)
    {
        if($request->has('title')) {
            $this->categoryService->editCategoryById($id, $request);
            if(Auth::user()->role_id == 3){
                return redirect()->route('admin.categories');
            } else {
                return redirect()->route('employee.categories');
            }
        }
        $category = Category::findOrFail($id);
        return view('edit-category',[
            'category' => $category,
        ]);
    }

    public function deleteCategory(int $id)
    {
        $this->categoryService->deleteCategoryById($id);
        if(Auth::user()->role_id == 3){
            return redirect()->route('admin.categories');
        } else {
            return redirect()->route('employee.categories');
        }
    }
}
