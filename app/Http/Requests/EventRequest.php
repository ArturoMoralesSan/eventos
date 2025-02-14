<?php

namespace App\Http\Requests;

use App\Rules\NotLowercase;
use App\Rules\NotUppercase;
use Illuminate\Validation\Rule;

class EventRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', new NotUppercase, new NotLowercase, 'max:100'],
            'description' => ['required', new NotUppercase, new NotLowercase, 'max:4000'],
            'start_date' => ['required'],
            'finish_date' => ['required'],
        ];
    }
}
