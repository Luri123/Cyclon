<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AuthorFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules= [
            'name' => [
                'required',
                'string', 
                'max:25'     
            ],
            'description'=> [
                'required'
            ],
        ];

        if ($this->isMethod('POST')) {
            $rules['image'] = 'required|mimes:jpeg,jpg,png';
        }
        else {
            $rules['image'] = 'nullable|mimes:jpeg,jpg,png';
        }

        return $rules;
    }
}
