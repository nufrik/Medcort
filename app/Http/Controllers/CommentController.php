<?php

namespace App\Http\Controllers;



use App\Http\Requests\Comment\CreateRequest;
use App\Models\Books;
use App\Services\CommentServiceInterface;

class CommentController extends Controller
{
    private CommentServiceInterface $commentService;

    public function __construct(CommentServiceInterface $commentService)
    {
        $this->commentService = $commentService;
    }

    public function create(int $id, CreateRequest $request)
    {
        $book = Books::findOrFail($id);

        if ($request->has('text')) {
            $this->commentService->createNewCommentByIdBook($id, $request);
            return redirect()->route('book', ['slug' => $book->slug]);
        }
        return route('book', ['slug' => $book->slug]);
    }
}
