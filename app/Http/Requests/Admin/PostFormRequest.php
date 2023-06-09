<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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

            'category_id' => [
                'required',
                'integer'
            ],
            'author_id' => [
                'required',
                'integer' 
            ],
            'title'=> [
                'required',
                'string'
            ],

            'description'=> [
                'required',
             
            ],

            'status'=> [
                'nullable',
             
            ],
        ];


        if ($this->isMethod('POST')) {
            $rules['image1'] = 'required|mimes:jpeg,jpg,png';
        }
        else {
            $rules['image1'] = 'nullable|mimes:jpeg,jpg,png';
        }

        if ($this->isMethod('POST')) {
            $rules['image2'] = 'required|mimes:jpeg,jpg,png';
        }
        else {
            $rules['image2'] = 'nullable|mimes:jpeg,jpg,png';
        }

        if ($this->isMethod('POST')) {
            $rules['image2'] = 'required|mimes:jpeg,jpg,png';
        }
        else {
            $rules['image2'] = 'nullable|mimes:jpeg,jpg,png';
        }

        return $rules;
    }
        
    
}
