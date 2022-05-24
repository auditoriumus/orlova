<?php

namespace App\Http\Services\UsersCoursesServices;


use App\Http\Repositories\UsersCoursesRepository\UsersCoursesRepository;
use App\Http\Services\Service;

class UsersCoursesService extends Service
{
    public function __construct(UsersCoursesRepository $repository)
    {
        parent::__construct($repository);
    }
}
