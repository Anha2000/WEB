<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
			'name'=>'required',
            'email'=>'required|email',
			'message'=>'required|max:500'
        ];
    }
	
	
	public function messages()
    {
        return [
			'name.required'=>"Поле ім'я є обов'язковим",
            'email.required'=>"Поле email є обов'язковим",
			'message.required'=>"Поле коментар є обов'язковим",
        ];
    }
}
