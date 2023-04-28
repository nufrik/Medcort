<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'title' => ['string', 'max:30'],
            'author' => ['string', 'max:50'],
            'description' => ['string', 'max:10000'],
            'rating' => ['numeric'],
            'cover' => ['image'],
            'category_id' => ['numeric'],
        ];
    }
}
