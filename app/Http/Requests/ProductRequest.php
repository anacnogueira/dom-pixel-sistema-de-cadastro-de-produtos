<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required'],
            'description' => ['nullable'],
            'amount' => ['required'],
            'stock'=> ['required', 'integer'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Informe o nome do produto',
            'amount.required' => 'Informe o valor do produto',
            'stock.required' => 'Informe a qtde em estoque do produto',
            'stock.integer' => 'A quantidade deve ser um número inteiro',            
        ];
    }
}
