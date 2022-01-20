<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Http\Resources\UsersVideoResource;
use App\Http\Services\CommentServices\GetCommentService;
use App\Http\Services\UsersVideosServices\GetUsersVideosService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function __invoke()
    {
        $userCourses = app(GetUsersVideosService::class)->getCourseByUserUuid(Auth::user()->uuid)->toArray();
        View::share([
            'userCourses' => $userCourses,
        ]);
        return view('home');
    }
}
