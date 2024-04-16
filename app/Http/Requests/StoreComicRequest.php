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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'title' => 'required|max:255',
            'description' => 'nullable|max:5000',
            'thumb' => 'nullable|max:255',
            'price' => 'required|max:10',
            'series' => 'required|max:50',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|max:50',
            'artists' => 'nullable|max:1000',
            'writers' => 'required|max:1000',
        ];
    }

    public function messages(): array {
        return [
            'required' => 'Il campo :attribute è obbligatorio',
            'max' => 'Il campo :attribute può contenere al massimo :max caratteri',
            'sale_date.date_format' => 'La data non è del formato giusto, inserire una data con il formato: YYYY-dd-mm',
        ];
    }

    public function attributes() :array {
        return [
            'title' => 'titolo',
            'description' => 'descrizione',
            'thumb' => 'immagine',
            'price' => 'prezzo',
            'series' => 'serie',
            'sale_date' => 'data di rilascio',
            'type' => 'tipo',
            'artists' => 'artisti',
            'writers' => 'scrittori',
        ];
    }
}
