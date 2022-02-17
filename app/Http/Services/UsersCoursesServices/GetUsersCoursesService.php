<?php

namespace App\Http\Services\UsersCoursesServices;


use App\Http\Services\CourseServices\GetCourseService;
use App\Http\Services\UserServices\GetUserService;
use Carbon\Carbon;

class GetUsersCoursesService extends UsersCoursesService
{
    public function isAvailable(int $userId, int $courseId)
    {
        $isPayedInfo = $this->repository->isAvailable($userId, $courseId);
        if (empty($isPayedInfo)) {
            return false;
        }

        $append_days = json_decode($isPayedInfo->options, true)['append_days'] ?? 0;

        $paymentDate = $isPayedInfo->created_at;
        $daysCountAvailable = json_decode($isPayedInfo->course->options, true)['days'];

        if (empty($daysCountAvailable)) return $isPayedInfo;

        $dateDifferent = Carbon::now()->diffInDays($paymentDate);
        if ($daysCountAvailable - $dateDifferent + $append_days > 0) {
            return $isPayedInfo;
        }
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
