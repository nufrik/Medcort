<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\CreateRequest;
use App\Http\Requests\Book\EditRequest;
use App\Models\Books;
use App\Models\Category;
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

    public function createForm(CreateRequest $request)
    {
        if($request->has('title') and $request->has('description') and $request->has('cover') and $request->has('author') and $request->has('rating')) {
            $this->bookService->createBook($request);
            return redirect()->route('admin.books');
        }
        return view('new-book', [
            'categories' => Category::all(),
        ]);
    }

    public function editBook(int $id, EditRequest $request)
    {
        if($request->has('title') and $request->has('description') and $request->has('cover') and $request->has('author') and $request->has('rating')) {
            $this->bookService->editBookById($id, $request);
            return redirect()->route('admin.books');
        }
        return view('edit-book', [
            'book' => Books::findOrFail($id),
            'categories' => Category::all(),
        ]);
    }

    public function deleteBook(int $id)
    {
        $this->bookService->deleteBookById($id);
        return redirect()->route('admin.books');
    }
}
