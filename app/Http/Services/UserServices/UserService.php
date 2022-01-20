<?php

namespace App\Http\Services\UserServices;

use App\Http\Repositories\UserRepository\UserRepository;

class UserService extends \App\Http\Services\Service
{
    public function __construct(UserRepository $repository)
    {
        parent::__construct($repository);
    }
}
