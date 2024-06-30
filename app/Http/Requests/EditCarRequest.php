<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCarRequest extends FormRequest
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
            'model'=>'required|string|max:255',
            'year' => 'required|digits:4|integer|min:1600|max:'.(date('Y')+1),
            'email'=> 'required|string|email|unique:cars|max:255',
            'manufacturer_id'=>'required|numeric|exists:manufacturers,id',
        ];
    }
}
