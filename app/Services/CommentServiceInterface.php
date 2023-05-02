<?php

namespace App\Services;

use App\Http\Requests\Comment\CreateRequest;

interface CommentServiceInterface
{
    public function createNewCommentByIdBook(int $id, CreateRequest $request) : bool;
}
