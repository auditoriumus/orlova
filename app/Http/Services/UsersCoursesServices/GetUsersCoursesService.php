<?php

namespace App\Http\Services\UsersCoursesServices;


use App\Http\Services\CourseServices\GetCourseService;
use App\Http\Services\UserServices\GetUserService;

class GetUsersCoursesService extends UsersCoursesService
{
    public function isAvailable(int $userId, int $courseId)
    {
        if ($this->repository->isAvailable($userId, $courseId)) return true;
        return false;
    }

    public function getCourseByUserUuid(string $userUuid)
    {
        $user = app(GetUserService::class)->findByUuid($userUuid);
        $coursesListArray = $this->repository->getByUserId($user->id);
        $courseIds = [];
        foreach ($coursesListArray as $courseItem) {
            $courseIds[] = $courseItem->course_id;
        }
        return app(GetCourseService::class)->getCoursesByIds($courseIds);
    }
}
