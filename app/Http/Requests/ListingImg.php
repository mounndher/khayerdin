<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListingImg extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'images' => ['required', 'array'],
            'images.*' => ['image', 'max:3000'], // max size in kilobytes
            'listing_id' => ['required', 'integer'], // Ensure listing_id is present and an integer
        ];
    }

    /**
     * Get custom error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'images.required' => 'You must upload at least one image.',
            'images.*.image' => 'One or more selected files are not valid images.',
            'images.*.max' => 'One or more images exceed the maximum file size (3MB).',
            'listing_id.required' => 'The listing ID is required.',
            'listing_id.integer' => 'The listing ID must be a valid integer.',
        ];
    }
}
