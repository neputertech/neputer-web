<?php

namespace App\Http\Requests\Request_a_quote;

use Illuminate\Foundation\Http\FormRequest;

class requestQueueValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required| max:14 | min:10',
            'service' => 'required',
            'message' => 'required',
            'tac' => 'accepted',
            'captcha' => 'required|captcha'
        ];
    }

    public function messages()
    {
        return [
            'captcha.required' => 'Captcha is required',
            'captcha.captcha' => 'Invalid captcha',
        ];
    }
}
