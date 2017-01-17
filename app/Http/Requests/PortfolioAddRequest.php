<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Response;

class PortfolioAddRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required|string|min:1',
            'img_path' => 'required|image',
            'img_path2' => 'image',
            'img_path3' => 'image',
            'img_path4' => 'image',
            'description' => 'required|string',
            'category_id' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages() {
        return [
            'name.required' => 'A name is required',
            'img_path.required' => 'A image is required',
            'img_path.image' => 'A file has to be jpeg, png, bmp, gif, or svg',
            'img_path2.image' => 'A file has to be jpeg, png, bmp, gif, or svg',
            'img_path3.image' => 'A file has to be jpeg, png, bmp, gif, or svg',
            'img_path4.image' => 'A file has to be jpeg, png, bmp, gif, or svg',
            'description.required' => 'A description is required',
            'category_id.required' => 'A category is required'
        ];
    }

}
