<?php

namespace App\Http\Repositories\UsersVideosRepository;

use App\Http\Repositories\Repository;
use App\Models\UsersVideo;
use Faker\Provider\Uuid;
use Illuminate\Support\Facades\Log;

class UsersVideosRepository extends Repository
{
    public function __construct(UsersVideo $model)
    {
        parent::__construct($model);
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getVideoIdsBuUserId(int $userId)
    {
        return $this->model->where('user_id', $userId)->get();
    }

    public function addNew($userId, $videoId)
    {
        $isExists = $this->checkAccess($userId, $videoId);
        if ($isExists) return true;
        try {
            $this->model->uuid = Uuid::uuid();
            $this->model->user_id = $userId;
            $this->model->video_id = $videoId;
            return $this->model->save();
        } catch (\Exception $e) {
            Log::error('Ошибка разрешения курса пользователю: ' . $e->getMessage());
            return false;
        }
    }

    public function checkAccess($userId, $videoId)
    {
        return $this->model->where('user_id', $userId)
            ->where('video_id', $videoId)->first();
    }
}
