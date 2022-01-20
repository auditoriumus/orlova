<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Http\Services\FeedbackServices\CreateFeedbackService;
use Illuminate\Support\Facades\View;

class FeedbackController extends Controller
{
    public function createFeedback(FeedbackRequest $request)
    {
        if (app(CreateFeedbackService::class)->create($request)) {
            View::share([
                'message' => 'Сообщение отправлено'
            ]);
            return view('pages.contact');
        }
    }
}
