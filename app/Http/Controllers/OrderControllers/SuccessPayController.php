<?php

namespace App\Http\Controllers\OrderControllers;

use App\Events\SendEmailByPaymentEvent;
use App\Http\Controllers\Controller;
use App\Http\Services\OrderServices\ApproveOrderService;
use App\Http\Services\PromoCodeServices\ChangePromoCodeService;
use App\Http\Services\PromoCodeServices\GetPromoCodeService;
use App\Http\Services\UsersCoursesServices\CreateUsersCoursesService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class SuccessPayController extends Controller
{
    public function __invoke(Request $request)
    {
        $invoiceId = $request->input('InvId');
        $amount = $request->input('OutSum');
        $isPayedInfo = app(ApproveOrderService::class)->approve($invoiceId, $amount);
        if ($isPayedInfo) {
            app(CreateUsersCoursesService::class)->addNew($isPayedInfo['user_id'], $isPayedInfo['course_id']);
        }

        if (!empty($isPayedInfo['promo_code'])) {
            $promoCode = app(GetPromoCodeService::class)->findByTitle($isPayedInfo['promo_code']);
            if (!empty($promoCode) && !$promoCode->is_multiple) {
                app(ChangePromoCodeService::class)->deactivateByTitle($isPayedInfo['promo_code']);
            }
        }

        View::share([
            'message' => 'Поздравляю! Вам доступен просмотр практики!'
        ]);
        $user = User::find($isPayedInfo['user_id']);
        Auth::login($user);
        $info = [];
        $info['user'] = $user;
        if ($isPayedInfo['course_id'] == 6) {
            $info['courseId'] = 6;
            event(new SendEmailByPaymentEvent($info));
        } elseif ($isPayedInfo['course_id'] == 7) {
            $info['courseId'] = 7;
            event(new SendEmailByPaymentEvent($info));
        } elseif ($isPayedInfo['course_id'] == 8) {
            $info['courseId'] = 8;
            event(new SendEmailByPaymentEvent($info));
        } elseif ($isPayedInfo['course_id'] == 9) {
            $info['courseId'] = 9;
            event(new SendEmailByPaymentEvent($info));
        } elseif ($isPayedInfo['course_id'] == 10) {
            $info['courseId'] = 10;
            event(new SendEmailByPaymentEvent($info));
        } elseif ($isPayedInfo['course_id'] == 11) {
            $info['courseId'] = 11;
            event(new SendEmailByPaymentEvent($info));
        } elseif ($isPayedInfo['course_id'] == 12) {
            $info['courseId'] = 12;
            event(new SendEmailByPaymentEvent($info));
        }
        return view('home');
    }
}
