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
            'description' => 'required|string',
            'thumb' => 'url',
            'price' => 'numeric',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'=>'Il titolo è obbligatorio',
            'description.required'=>'La descrizione è obbligatoria',
            'thumb.url'=>'Inserisci un link valido',
            'price.numeric'=>'Inserisci un valore numerico',
            'series.required'=>'Il nome della serie è obbligatorio',
            'sale_date.required'=>'La data di vendita è obbligatoria',
            'type.required'=>'Il tipo è obbligatorio',
        ];
    }
}
