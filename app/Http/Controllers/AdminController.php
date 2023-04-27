<?php

namespace App\Http\Controllers;

use App\Services\AdminServiceInterface;

class AdminController extends Controller
{
    private AdminServiceInterface $adminService;

    public function __construct(AdminServiceInterface $adminService)
    {
        $this->adminService = $adminService;
    }

    public function admin()
    {
        return view('admin');
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

    public function changeRole(int $id)
    {
        $this->adminService->changeUserRoleById($id);
        return redirect()->route('admin.users');
    }

    public function deleteUser(int $id)
    {
        $this->adminService->deleteUserById($id);
        return redirect()->route('admin.users');
    }
}
