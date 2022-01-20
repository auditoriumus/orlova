<?php

namespace App\Http\Services\UsersVideosServices;

use App\Http\Services\CourseServices\GetCourseService;
use App\Http\Services\UserServices\GetUserService;
use App\Http\Services\VideoServices\GetVideoService;

class GetUsersVideosService extends UsersVideosService
{
    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function getCourseByUserUuid(string $uuid)
    {
        $userId = app(GetUserService::class)->findByUuid($uuid)->id;
        $userVideos =$this->repository->getVideoIdsBuUserId($userId);
        $videoIds = [];
        foreach ($userVideos as $video) {
            if (!in_array($video->video_id, $videoIds)) {
                $videoIds[] = $video->video_id;
            }
        }
        $courses = app(GetVideoService::class)->getCourseByVideoIds($videoIds);
        $courseIds = [];
        foreach ($courses as $course) {
            if (!in_array($course->course_id, $courseIds)) {
                $courseIds[] = $course->course_id;
            }
        }
        return app(GetCourseService::class)->getCoursesByIds($courseIds);
    }
}
