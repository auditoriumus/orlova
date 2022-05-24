<?php

namespace App\Http\Services\OrderServices;

use App\Http\Services\CourseServices\GetCourseService;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;

class CreateOrderService extends OrderService
{
    public function createNewOrder($data)
    {
        $data['uuid'] = Uuid::uuid();
        $data['course_id'] = app(GetCourseService::class)->findByUuid($data['course_uuid'])->id;
        return $this->repository->createNew($data);
    }
}
