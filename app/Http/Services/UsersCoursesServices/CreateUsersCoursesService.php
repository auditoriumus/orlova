<?php

namespace App\Http\Services\UsersCoursesServices;

class CreateUsersCoursesService extends UsersCoursesService
{
    public function addNew(int $userId, int $courseId)
    {
        return $this->repository->create($userId, $courseId);
    }
}
