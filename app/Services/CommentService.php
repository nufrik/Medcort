<?php

namespace App\Services;

use App\Http\Requests\Comment\CreateRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentService implements CommentServiceInterface
{
    public function createNewCommentByIdBook(int $id, CreateRequest $request) : bool
    {
        $request->validated();

        $comment = new Comment();
        $comment->text = $request->input('text');
        $comment->book_id = $id;
        $comment->user_id = Auth::id();

        return $comment->save();
    }
}
