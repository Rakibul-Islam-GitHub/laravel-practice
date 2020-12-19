<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createuserRequest extends FormRequest
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
            'username'=>'required|min:3',
            'password'=>'required|min:3',    
            'myimg'=>'required',

        ];

     
    }
    public function messages()
    {
        return [
            'username.required' => 'The username is Required.',
            'username.min'=> "must be at least 3 ch....",
            'myimg.required'  => 'Please choose an image!',

        ];
    }
}
