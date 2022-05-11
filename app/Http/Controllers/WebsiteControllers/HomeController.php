<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Http\Services\UsersCoursesServices\GetUsersCoursesService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function __invoke()
    {
        $userCourses = app(GetUsersCoursesService::class)->getCourseByUserUuid(Auth::user()->uuid)->toArray();
        View::share([
            'userCourses' => $userCourses,
        ]);
        return view('home');
    }
}
