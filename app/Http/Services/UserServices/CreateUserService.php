<?php

namespace App\Http\Services\UserServices;

use Illuminate\Http\Request;

class CreateUserService extends UserService
{
    public function createNewUser(Request $request)
    {
        $data = [];

        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['phone'] = $request->input('phone');
        $data['public_offer'] = $request->input('public_offer');
        $data['privacy_policy'] = $request->input('privacy_policy');

        return $this->repository->createNewUser($data);
    }
}
