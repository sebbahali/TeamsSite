<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class TeamRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:2', 'max:255', 'unique:teams'],
            'username' => ['required', 'string', 'min:2', 'max:20', 'unique:teams'],
            'logo' => ['required', 'image'],
            'email' => ['required', 'email', 'unique:teams'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string', 'min:4', 'max:20'],
            'message_code' => ['required', 'string', 'min:1', 'max:10'],
            'user_fullname' => ['required', 'string', 'min:2', 'max:255'],
            'description' => ['required', 'string', 'min:2'],
        ];
    }
}
