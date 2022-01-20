<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'message' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string',
            'subject' => 'required|string'
        ];
    }
}
