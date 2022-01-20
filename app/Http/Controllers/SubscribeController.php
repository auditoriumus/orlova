<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getList()
    {
        $client = $this->client;
        $response = $client->post('https://api.unisender.com/ru/api/getLists?format=json&api_key=' . env('SUBSCRIBE_TOKEN'));
        return $response->getBody()->getContents();
    }

    public function subscribe(Request $request)
    {
        $email = $request->input('email');
        $client = $this->client;
        $client->post('https://api.unisender.com/ru/api/subscribe?format=json&api_key=' . env('SUBSCRIBE_TOKEN') . '&list_ids=2' . '&fields[email]=' . $email . '&double_optin=0&overwrite=0');
        return view('welcome');
    }
}
