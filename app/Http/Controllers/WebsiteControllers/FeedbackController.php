<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Events\NewFeedback;
use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Http\Services\FeedbackServices\CreateFeedbackService;
use Illuminate\Support\Facades\View;

class FeedbackController extends Controller
{
    public function createFeedback(FeedbackRequest $request)
    {
        if ($feedback = app(CreateFeedbackService::class)->create($request)) {
            event(new NewFeedback($feedback));
            View::share([
                'message' => 'Сообщение отправлено'
            ]);
            return view('pages.contact');
        }
    }
}
