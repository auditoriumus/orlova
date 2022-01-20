<?php

namespace App\Http\Services\UsersVideosServices;

use App\Http\Services\VideoServices\GetVideoService;
use Illuminate\Support\Facades\Log;

class AddUserVideosService extends UsersVideosService
{
    public function addNewByCourseUuid($userId, $courseId)
    {
        $videos = app(GetVideoService::class)->getByCourseId($courseId);
        foreach ($videos as $video) {
            try {
                $this->repository->addNew($userId, $video->id);
            } catch (\Exception $e) {
                Log::error('Ошибка авторазрешения: ' . $e->getMessage());
                return false;
            }
        }
        return true;
    }
}
