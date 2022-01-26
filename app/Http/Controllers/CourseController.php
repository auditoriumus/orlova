<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Http\Services\CourseServices\GetCourseService;
use App\Http\Services\UsersCoursesServices\GetUsersCoursesService;
use App\Http\Services\VideoServices\GetVideoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class CourseController extends Controller
{

    public function index()
    {
        return CourseResource::collection(app(GetCourseService::class)->getAll());
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {

        $course = app(GetCourseService::class)->findByUuid($id);
        if (Auth::check()) {
            if (app(GetUsersCoursesService::class)->isAvailable(Auth::id(),$course->id)) {
                View::share([
                    'available' => true
                ]);
            }
        }
        $videos = app(GetVideoService::class)->getByCourseId($course->id);
        if ($course) {
            View::share([
                'course' => $course,
                'videos' => $videos
            ]);
            return view('pages.card');
        }
        return Redirect::back()->withErrors(['Курс не найден']);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
