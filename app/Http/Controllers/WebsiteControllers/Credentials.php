<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\Credential;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Credentials extends Controller
{
    public function create()
    {
        return view('pages.credentials');
    }

    public function store(Request $request)
    {
        $data = [
            'fio' => $request->input('fio'),
            'state' => $request->input('state'),
            'town' => $request->input('town'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
        ];
        if (Credential::create($data)) {
            \Illuminate\Support\Facades\View::share([
                'message' => 'Сохранено'
            ]);
        }
        return $this->create();
    }
}
