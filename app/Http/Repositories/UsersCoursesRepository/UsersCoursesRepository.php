<?php

namespace App\Http\Repositories\UsersCoursesRepository;

use App\Http\Repositories\Repository;
use App\Models\UsersCourse;
use Illuminate\Support\Str;

class UsersCoursesRepository extends Repository
{
    public function __construct(UsersCourse $model)
    {
        parent::__construct($model);
    }

    public function isAvailable(int $userId, int $courseId)
    {
        return $this->model
            ->where('user_id', $userId)
            ->where('course_id', $courseId)
            ->first();
    }

    public function getByUserId(int $userId)
    {
        return $this->model
            ->where('user_id', $userId)->get();
    }

    public function create(int $userId, int $courseId)
    {
        $this->model->uuid = Str::uuid();
        $this->model->user_id = $userId;
        $this->model->course_id = $courseId;
        return $this->model->save();
    }
}
