<?php

namespace App\Http\Services\VideoServices;

use App\Http\Repositories\VideoRepository\VideoRepository;

class VideoService extends \App\Http\Services\Service
{
    public function __construct(VideoRepository $repository)
    {
        parent::__construct($repository);
    }
}
