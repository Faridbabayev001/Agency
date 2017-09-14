<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'meta_title_en' => 'required',
            'meta_title_az' => 'required',
            'meta_desc_en' => 'required',
            'meta_desc_az' => 'required',
            'address_en' => 'required',
            'address_az' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'email' => 'required',
            'facebook_link' => 'required',
            'twitter_link' => 'required',
            'linkedin_link' => 'required',
            'contact' => 'required',
        ];
    }
}
