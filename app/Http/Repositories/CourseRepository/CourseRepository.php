<?php

namespace App\Http\Repositories\CourseRepository;

use App\Http\Repositories\Repository;
use App\Models\Course;
use Illuminate\Support\Facades\Log;

class CourseRepository extends Repository
{
    public function __construct(Course $model)
    {
        parent::__construct($model);
    }

    public function findByUuid(string $uuid)
    {
        try {
            return $this->model->where('uuid', $uuid)->first();
        } catch (\Exception $e) {
            Log::error('Ошибка поиска курса: ' . $e->getMessage());
            return false;
        }
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getCoursesByIds(array $ids)
    {
        return $this->model->whereIn('id', $ids)->get();
    }
}
