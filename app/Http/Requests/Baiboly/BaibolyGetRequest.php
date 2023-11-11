<?php

namespace App\Http\Requests\Baiboly;

use Illuminate\Foundation\Http\FormRequest;

class BaibolyGetRequest extends FormRequest
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
            'chapter_id' => ['required'],
            'toko' => ['required','min:1','numeric'],
            'andininy_deb' => ['required','min:1','numeric'],
            'andininy_fin' => ['required','gte:andininy_deb','numeric'],
        ];
    }

        /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'chapter_id.required' => 'Ampidiro ny boky',
            'toko.required' => 'Ampidiro ny toko',
            'andininy_deb.required' => 'Ampidiro ny andininy faha',
            'andininy_fin.required' => 'Ampidiro ny andininy hatramin\'ny',
        ];
    }
}
