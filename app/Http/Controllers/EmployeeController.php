<?php

namespace App\Http\Controllers;

use App\Services\EmployeeService;


class EmployeeController extends Controller
{
    private EmployeeService $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function employee()
    {
        return view('employee');
    }

    public function showCategories()
    {
        return view('employee-categories',[
            'categories' => $this->employeeService->getAllCategories(),
        ]);
    }

    public function showBooks()
    {
        return view('employee-books',[
            'books' => $this->employeeService->getAllBooks(),
        ]);
    }
}
