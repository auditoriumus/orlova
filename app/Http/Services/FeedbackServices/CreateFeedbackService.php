<?php

namespace App\Http\Services\FeedbackServices;

use Illuminate\Http\Request;

class CreateFeedbackService extends FeedbackService
{
    public function create(Request $request)
    {
        $data = $request->all();
        return $this->repository->create($data);
    }
}
