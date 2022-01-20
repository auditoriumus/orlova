<?php

namespace App\Http\Repositories\VideoRepository;

use App\Http\Repositories\Repository;
use App\Models\Video;

class VideoRepository extends Repository
{
    public function __construct(Video $model)
    {
        parent::__construct($model);
    }

    public function getCourseByVideoIds(array $ids)
    {
        return $this->model->whereIn('course_id', $ids)->get();
    }

    public function getByCourseId(int $id)
    {
        return $this->model->where('course_id', $id)->get();
    }
}
