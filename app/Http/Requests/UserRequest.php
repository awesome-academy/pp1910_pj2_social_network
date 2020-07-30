<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $gender = config('user.gender');

        return [
            'name' => 'min:4|max:50',
            'gender' => [
                Rule::in($gender)
            ],
            'birthday' => 'date|date_format:dd-mm-YY|before:today',
        ];
    }
}
