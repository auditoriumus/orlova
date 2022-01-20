<?php

namespace App\Http\Services\UserServices;

class GetUserService extends UserService
{
    public function findByUuid(string $uuid)
    {
        return $this->repository->findByUuid($uuid);
    }

    public function isUserExistsByEmail(string $email)
    {
        return $this->repository->findByEmail($email);
    }
}
