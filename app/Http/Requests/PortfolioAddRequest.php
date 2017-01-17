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
            'description.required' => 'A description is required',
            'category_id.required' => 'A category is required'
        ];
    }
}
