<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseResource;
use App\Http\Services\CourseServices\GetCourseService;
use App\Http\Services\UsersCoursesServices\GetUsersCoursesService;
use App\Http\Services\VideoServices\GetVideoService;
use Carbon\Carbon;
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
            if ($userCourse = app(GetUsersCoursesService::class)->isAvailable(Auth::id(),$course->id)) {
                View::share([
                    'available' => true
                ]);
            }

            if (!empty($course)) {
                $userBoughtCourse = Carbon::createFromTimeString($userCourse->created_at);
                $now = Carbon::now();
                $diffTime = $now->diffInDays($userBoughtCourse);
                if($diffTime < 2) {
                    $course->options = json_encode(['parts' => 1]);
                } elseif ($diffTime >= 2 && $diffTime < 3){
                    $course->options = json_encode(['parts' => 2]);
                } elseif ($diffTime >= 3 && $diffTime < 4) {
                    $course->options = json_encode(['parts' => 3]);
                } elseif ($diffTime >= 4 && $diffTime < 5) {
                    $course->options = json_encode(['parts' => 4]);
                } elseif ($diffTime >= 5 && $diffTime < 6) {
                    $course->options = json_encode(['parts' => 5]);
                } elseif ($diffTime >= 6 && $diffTime < 7) {
                    $course->options = json_encode(['parts' => 6]);
                } elseif ($diffTime >= 7) {
                    $course->options = json_encode(['parts' => 7]);
                }
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
