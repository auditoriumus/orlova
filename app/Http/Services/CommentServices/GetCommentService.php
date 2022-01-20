<?php

namespace App\Http\Services\CommentServices;

class GetCommentService extends CommentService
{
    public function getAll()
    {
        return $this->repository->getAll();
    }
}
