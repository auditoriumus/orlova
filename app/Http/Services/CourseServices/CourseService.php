<?php

namespace App\Http\Services\CourseServices;

use App\Http\Repositories\CourseRepository\CourseRepository;
use App\Http\Services\Service;

class CourseService extends Service
{
    public function __construct(CourseRepository $courseRepository)
    {
        $this->repository = $courseRepository;
    }
}
