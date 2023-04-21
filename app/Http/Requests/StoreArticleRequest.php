<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_id'  => ['required'],
            'title' => ['title|max:30|required'],
            'exerpt' => ['max:100|required'],
            'thumbnail' => ['required'],
            'banner' => ['required'],
            'article_body' => ['max:100|required'],
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'Please fill this field',
            'title.required' => 'Please fill this field',
            'exerpt.required' => 'Please fill this field',
            'thumbnail.required' => 'Please fill this field',
            'banner.required' => 'Please fill this field',
            'article_body.required' => 'Please fill this field',
        ];

    }
}
