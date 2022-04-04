<?php

namespace App\Http\Controllers\OrderControllers;

use App\Events\SendEmailByPaymentEvent;
use App\Http\Controllers\Controller;
use App\Http\Services\OrderServices\ApproveOrderService;
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
        View::share([
            'message' => 'Поздравляю! Вам доступен просмотр практики!'
        ]);
        $user = User::find($isPayedInfo['user_id']);
        Auth::login($user);
        event(new SendEmailByPaymentEvent($user));
        return view('home');
    }
}
