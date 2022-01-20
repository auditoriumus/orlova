<?php

namespace App\Http\Repositories\UserRepository;

use App\Models\User;
use Faker\Provider\Uuid;
use Illuminate\Support\Facades\Hash;

class UserRepository extends \App\Http\Repositories\Repository
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function findByUuid(string $uuid)
    {
        return $this->model->where('uuid', $uuid)->first();
    }

    public function findByEmail(string $email)
    {
        return $this->model->where('email', $email)->first();
    }

    public function createNewUser(array $data)
    {
        return $this->model->create([
            'uuid' => Uuid::uuid(),
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['email']),
            'public_offer' => $data['public_offer'],
            'privacy_policy' => $data['privacy_policy'],
        ]);
    }
}
