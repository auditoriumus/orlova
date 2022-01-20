<?php

namespace App\Http\Services\UsersVideosServices;

use App\Http\Repositories\UsersVideosRepository\UsersVideosRepository;
use App\Http\Services\Service;

class UsersVideosService extends Service
{
    public function __construct(UsersVideosRepository $repository)
    {
        parent::__construct($repository);
    }
}
