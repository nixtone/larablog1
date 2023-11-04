<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required',
            'translit' => '',
            'text' => 'required',
            'anons' => '',
            'category_id' => 'integer|required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Заполните заголовок бряк',
            'anons.required' => 'Заполните анонс тоже',
        ];
    }
}
