<?php

namespace App\Http\Services\FeedbackServices;

use App\Http\Repositories\FeedbackRepository\FeedbackRepository;
use App\Http\Repositories\Repository;
use Illuminate\Http\Request;

class FeedbackService extends \App\Http\Services\Service
{
    public function __construct(FeedbackRepository $repository)
    {
        parent::__construct($repository);
    }
}
