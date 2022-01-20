<?php

namespace App\Http\Controllers\OrderControllers;

use App\Http\Controllers\Controller;
use App\Http\Services\OrderServices\CreateOrderService;
use App\Http\Services\OrderServices\PayLinkService;
use App\Http\Services\UserServices\CreateUserService;
use App\Http\Services\UserServices\GetUserService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function paymentGenerate(Request $request)
    {
        $email = $request->input('email');
        $user = app(GetUserService::class)->isUserExistsByEmail($email);

        if (empty($user)) {
            $userId = app(CreateUserService::class)->createNewUser($request)->id;
        } else {
            $userId = $user->id;
        }

        $urlInfo = app(PayLinkService::class)->generate($request);

        $createOrderData = [];
        $createOrderData['user_id'] = $userId;
        $createOrderData['course_uuid'] = $request->input('course_id');
        $createOrderData['invoice_id'] = $urlInfo['invoice_id'];
        $createOrderData['price'] = $request->input('price');
        app(CreateOrderService::class)->createNewOrder($createOrderData);

        return redirect($urlInfo['url']);
    }
}
