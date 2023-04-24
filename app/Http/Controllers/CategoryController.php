<?php

namespace App\Http\Controllers;

use App\Services\CategoryServiceInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private CategoryServiceInterface $categoryService;

    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function showOne($slug)
    {
        dump($this->categoryService->getById($slug));
    }

    public function showAll()
    {
        return view('home', [
           'categories' => $this->categoryService->getByAll(),
        ]);
    }
}
