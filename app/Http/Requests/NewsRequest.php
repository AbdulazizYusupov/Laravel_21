<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Set to true if the user is allowed to make this request
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
            'category_id' => 'required|integer|exists:categories,id', // Validates category_id
            'title_uz' => 'required|string|max:255', // Validates the Uzbek title
            'title_ru' => 'required|string|max:255', // Validates the Russian title
            'title_en' => 'required|string|max:255', // Validates the English title
            'description_uz' => 'required|string', // Validates the Uzbek description
            'description_ru' => 'required|string', // Validates the Russian description
            'description_en' => 'required|string', // Validates the English description
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
        ];
    }
}
