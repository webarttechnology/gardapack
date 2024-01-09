<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'image' => 'required|file|image|mimes:jpeg,png,jpg',
            'description' => 'required|string',
            'subheading' => 'required',
        ];
    }

      /**
     * Get custom error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'description.required' => 'The description field is required.',
            'description.string' => 'The description must be a string.',
            'subheading.required' => 'The subheading field is required.',
            'image.required' => 'The image field is required.',
            'image.file' => 'The image must be a file.',
            'image.image' => 'The image must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg.',
           
        ];
    }
}
