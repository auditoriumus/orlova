<?php

namespace App\Http\Controllers\OrderControllers;

use App\Http\Controllers\Controller;
use App\Http\Services\OrderServices\CreateOrderService;
use App\Http\Services\OrderServices\PayLinkService;
use App\Http\Services\PromoCodeServices\ChangePromoCodeService;
use App\Http\Services\PromoCodeServices\CheckPromoCodeService;
use App\Http\Services\PromoCodeServices\GetPromoCodeService;
use App\Http\Services\UserServices\CreateUserService;
use App\Http\Services\UserServices\GetUserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function paymentGenerate(Request $request)
    {
        $validator = $request->validate(['email' => 'email']);

        $discount = 0;
        if ($request->has('promo_code') && !empty($request->input('promo_code'))) {
            $promoCodeTitle = $request->input('promo_code');
            $promoCode = app(GetPromoCodeService::class)->findByTitle($promoCodeTitle);
            if (!empty($promoCode)) {
                if (app(CheckPromoCodeService::class)->check($promoCode)) {
                    $discount = (float)$promoCode->amount;
                }
            } else {
                return Redirect::back()->withErrors(['Промокод не найден']);
            }
        }

        $email = $request->input('email');
        $user = app(GetUserService::class)->isUserExistsByEmail($email);

        if (empty($user)) {
            $userId = app(CreateUserService::class)->createNewUser($request)->id;
        } else {
            $userId = $user->id;
        }

        $request->merge([
            'price' => $request->input('price') - $discount
        ]);
        $urlInfo = app(PayLinkService::class)->generate($request);

        $createOrderData = [];
        $createOrderData['user_id'] = $userId;
        $createOrderData['course_uuid'] = $request->input('course_id');
        $createOrderData['invoice_id'] = $urlInfo['invoice_id'];
        $createOrderData['price'] = $request->input('price') - $discount;
        $createOrderData['promo_code'] = $promoCode->title ?? null;
        app(CreateOrderService::class)->createNewOrder($createOrderData);

        return redirect($urlInfo['url']);
    }
}
