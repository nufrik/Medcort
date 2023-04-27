<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryServiceInterface;
use Illuminate\Http\Request;

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

    public function createForm()
    {
        return view('new-category');
    }
}
