<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
            // 'email'=>'bail|email|confirmed',
            // 'content'=>'required',
            // 'photo'=>'bail|between:2.4required',
            'check.*.id'=>'distinct',
            // 'TOS'=>'boolean',
            // 'url'=>'required|active_url',
            // 'dt'=>'required|after:today',
        ];
    }
    
}
