<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
//            'category_id' => 'required',
//            'status' => 'required',
//            'image' => 'required|image',
//            'meta_keyword' => 'required',
//            'title_en' => 'required',
//            'title_az' => 'required',
//            'text_en' => 'required',
//            'text_az' => 'required',
        ];
    }
}
