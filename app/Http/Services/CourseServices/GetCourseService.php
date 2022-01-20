<?php

namespace App\Http\Services\CourseServices;

class GetCourseService extends CourseService
{
    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function findByUuid(string $uuid)
    {
        return $this->repository->findByUuid($uuid);
    }

    public function getCoursesByIds(array $ids)
    {
        return $this->repository->getCoursesByIds($ids);
    }

}
