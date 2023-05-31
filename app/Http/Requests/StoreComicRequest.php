<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'thumb' => 'required|min:5|max:255',
            'price' => 'required|min:3|max:50',
            'description' => 'required|min:10|max:255',
            'series' => 'required|min:1|max:255',
            'sale_date' => 'required|min:6|max:10',
            'type' => 'required|min:2|max:50',
            'artists' => 'required|min:2|max:255',
            'writers' => 'required|min:2|max:255',
        ];
    }
}
