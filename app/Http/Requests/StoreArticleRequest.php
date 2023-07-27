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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:30',
            'testo' => 'required',
        ];
    }

    public function messages () {

        return [
            'title.required' => 'Il campo del titolo è obbligatorio',
            'title.max' => 'La lunghezza massima del testo è di 30 caratteri',
            'testo.required' => 'Il campo del contenuto è obbligatorio'
        ];
    }
}
