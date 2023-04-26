<?php

namespace App\Services;

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

    public function getBookByCategorySlug(string $slug, string $bookSlug) : Books
    {
        $book = Books::join('categories', 'categories.id', '=', 'books.category_id')
            ->where('categories.slug', '=', $slug)
            ->where('books.slug', '=', $bookSlug)
            ->select('books.*')
            ->first();

        return $book;
    }
}
