<?php

namespace App\Http\Repositories\FeedbackRepository;

use App\Http\Repositories\Repository;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Model;

class FeedbackRepository extends Repository
{
    public function __construct(Feedback $model)
    {
        parent::__construct($model);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }
}
