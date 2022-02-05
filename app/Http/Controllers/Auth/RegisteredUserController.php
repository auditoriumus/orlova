<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Services\UsersCoursesServices\CreateUsersCoursesService;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Faker\Provider\Uuid;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('pages.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
            'public_offer' => ['accepted'],
            'privacy_policy' => ['accepted']
        ]);

        $user = User::create([
            'uuid' => Uuid::uuid(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'public_offer' => $request->public_offer,
            'privacy_policy' => $request->privacy_policy,
        ]);

        event(new Registered($user));

        Auth::login($user);

        app(CreateUsersCoursesService::class)->addNew($user->id, 1);

        return redirect(RouteServiceProvider::HOME);
    }
}
