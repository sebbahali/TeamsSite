<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class MettingRequest extends FormRequest
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
            'number' => ['required', 'unique:mettings'],
            'day' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
            'location' => ['required'],
            'attendees' => ['required'],
            'body' => ['required'],
        ];
    }
}
