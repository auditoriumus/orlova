<?php

namespace App\Http\Repositories\CommentRepository;

use App\Http\Repositories\Repository;
use App\Models\Comment;

class CommentRepository extends Repository
{
    public function __construct(Comment $model)
    {
        parent::__construct($model);
    }

    public function getAll()
    {
        return $this->model->all();
    }
}
