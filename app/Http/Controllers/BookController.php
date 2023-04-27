<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Services\BookServiceInterface;


class BookController extends Controller
{

    private BookServiceInterface $bookService;

    public function __construct(BookServiceInterface $bookService)
    {
        $this->bookService = $bookService;
    }

    public function showBooks(string $slug)
    {
        $data = $this->bookService->getBooksByCategorySlug($slug);

        return view('books', [
            'books' => $data,
        ]);
    }

    public function showBook(string $slug)
    {
        return view('show-book', [
            'book' => $this->bookService->getBookBySlug($slug),
        ]);
    }
}
