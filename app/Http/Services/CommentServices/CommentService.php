<?php

namespace App\Http\Services\CommentServices;

use App\Http\Repositories\CommentRepository\CommentRepository;
use App\Http\Services\Service;

class CommentService extends Service
{
    public function __construct(CommentRepository $repository)
    {
        parent::__construct($repository);
    }
}
