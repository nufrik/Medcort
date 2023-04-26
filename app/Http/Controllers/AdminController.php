<?php

namespace App\Http\Controllers;

use App\Services\AdminServiceInterface;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private AdminServiceInterface $adminService;

    public function __construct(AdminServiceInterface $adminService)
    {
        $this->adminService = $adminService;
    }

    public function admin()
    {
        return view('admin',[
            'users' => $this->adminService->getAllUsers(),
            'categories' => $this->adminService->getAllCategories(),
            'books' => $this->adminService->getAllBooks(),
        ]);
    }

    public function showUsers()
    {
        return view('admin-users',[
            'users' => $this->adminService->getAllUsers(),
        ]);
    }
    public function showCategories()
    {
        return view('admin-categories',[
            'categories' => $this->adminService->getAllCategories(),
        ]);
    }
    public function showBooks()
    {
        return view('admin-books',[
            'books' => $this->adminService->getAllBooks(),
        ]);
    }
}
