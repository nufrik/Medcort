<?php

namespace App\Services;

use App\Http\Requests\Book\CreateRequest;
use App\Http\Requests\Book\EditRequest;
use App\Models\Books;
use Illuminate\Pagination\LengthAwarePaginator;


class BookService implements BookServiceInterface
{
    public function getBooksByCategorySlug(string $slug) : LengthAwarePaginator
    {
        $books = Books::join('categories', 'categories.id', '=', 'books.category_id')
            ->where('categories.slug', '=', $slug)->select('books.*')->paginate(10);

        return $books;
    }

    public function getBookBySlug(string $slug) : Books
    {
        $book = Books::where('slug', '=', $slug)->first();
        return $book;
    }

    public function createBook(CreateRequest $request) : bool
    {
        $data = $request->validated();
        $translit = str_slug($data['title']);
        $path = $request->file('cover')->store('/covers', 'public');
        $book = new Books();
        $book->title = $request->input('title');
        $book->slug = $translit;
        $book->author = $request->input('author');
        $book->description = $request->input('description');
        $book->rating = $request->input('rating');
        $book->cover = $path;
        $book->category_id = $request->input('category_id');

        return $book->save();
    }

    public function editBookById(int $id, EditRequest $request) : bool
    {

    }

    public function deleteBookById(int $id) : bool
    {

    }
}
