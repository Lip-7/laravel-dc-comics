<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
    public function messages() {
        return [
            //fatte in inglese perchè il sito era full eng, e pareva brutto, chiesto a Samuel il permesso :)
            'title.required' => "The comic's title is required!",
            'title.min' => "The comic's title must be at least :min characters long!",
            'title.max' => "The comic's title must not exceed :max characters!",
            'thumb.required' => "The comic's thumbnail is required!",
            'thumb.min' => "The comic's thumbnail must be at least :min characters long!",
            'thumb.max' => "The comic's thumbnail must not exceed :max characters!",
            'price.required' => "The comic's price is required!",
            'price.min' => "The comic's price must be at least :min characters long!",
            'price.max' => "The comic's price must not exceed :max characters!",
            'description.required' => "The comic's description is required!",
            'description.min' => "The comic's description must be at least :min characters long!",
            'description.max' => "The comic's description must not exceed :max characters!",
            'series.required' => "The comic's series is required!",
            'series.min' => "The comic's series must be at least :min characters long!",
            'series.max' => "The comic's series must not exceed :max characters!",
            'sale_date.required' => "The comic's sale date is required!",
            'sale_date.min' => "The comic's sale date must be at least :min characters long!",
            'sale_date.max' => "The comic's sale date must not exceed :max characters!",
            'type.required' => "The comic's type is required!",
            'type.min' => "The comic's type must be at least :min characters long!",
            'type.max' => "The comic's type must not exceed :max characters!",
            'artists.required' => "The comic's artists are required!",
            'artists.min' => "The comic's artists must be at least :min characters long!",
            'artists.max' => "The comic's artists must not exceed :max characters!",
            'writers.required' => "The comic's writers are required!",
            'writers.min' => "The comic's writers must be at least :min characters long!",
            'writers.max' => "The comic's writers must not exceed :max characters!",
        ];
    }
}
