<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Category;
use App\Services\BookServiceInterface;
use Illuminate\Http\Request;

class BookController extends Controller
{

    private BookServiceInterface $bookService;

    public function __construct(BookServiceInterface $bookService)
    {
        $this->bookService = $bookService;
    }

    public function showBooks($slug)
    {
        return $this->bookService->getBooks($slug);
    }
}
