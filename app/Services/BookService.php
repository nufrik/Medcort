<?php

namespace App\Services;

use App\Models\Category;

class BookService implements BookServiceInterface
{
    public function getBooks($slug)
    {
        $category = Category::where('slug', '=', $slug)->get();

        foreach ($category as $books){
            foreach ($books->books as $book){
                dump($book);
            }
        }
    }
}
