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
            'title' => 'required',
            'exerpt' => 'required', 'max:100',
            'thumbnail' => 'required',
            'banner' => 'required',
            'article_body' => 'required', 'min:200',
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'Please fill this field',
            'title.required' => 'Please fill this field',
            'exerpt.required' => 'Please fill this field',
            'exerpt.max' => 'A maximum of 100 words is needed',
            'thumbnail.required' => 'Please fill this field',
            'banner.required' => 'Please fill this field',
            'article_body.required' => 'Please fill this field',
        ];

    }
}
