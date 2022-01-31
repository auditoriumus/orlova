<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Http\Services\CommentServices\GetCommentService;
use App\Http\Services\CourseServices\GetCourseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        Log::error('Тест лог');
        $comments = app(GetCommentService::class)->getAll();
        $courses = app(GetCourseService::class)->getAll()->toArray();
        View::share([
            'courses' => array_reverse($courses),
            'comments' => $comments
        ]);
        return view('welcome');
    }
}
