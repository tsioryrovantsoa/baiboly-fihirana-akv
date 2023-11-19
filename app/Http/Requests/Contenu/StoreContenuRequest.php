<?php

namespace App\Http\Requests\Contenu;

use Illuminate\Foundation\Http\FormRequest;

class StoreContenuRequest extends FormRequest
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
            'sous_categorie_id' => 'required|exists:sous_categories,id',
            'numero' => 'nullable|numeric|min:1',
            'titre' => 'required|string',
            'fichier' => 'required|file|mimes:pptx,ppsx'
        ];
    }
}
