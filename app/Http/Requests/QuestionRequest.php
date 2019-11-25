<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'title'=>'required',
            'contents'=>'required|unique:questions',
            'o1'=>'required',
            'o2'=>'required',
            'o3'=>'required',
            'o4'=>'required',
            'ans'=> 'required|numeric|min:1|max:4',
        ];
    }
}
