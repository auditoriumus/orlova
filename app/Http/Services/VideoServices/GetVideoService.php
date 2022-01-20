<?php

namespace App\Http\Services\VideoServices;

class GetVideoService extends VideoService
{
    public function getCourseByVideoIds(array $ids)
    {
        return $this->repository->getCourseByVideoIds($ids);
    }

    public function getByCourseId(int $id)
    {
        return $this->repository->getByCourseId($id);
    }
}
