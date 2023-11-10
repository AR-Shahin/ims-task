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
    public function rules()
    {
        if ($this->method() === 'POST') {
            return [
                'name' => "required|unique:products,name",
                "price" => ["required"],
                "quantity" => ["required"],
            ];
        } else {
            return [
                'name' => "required|unique:products,name,{$this->product->id}",
                "price" => ["required"],
                "quantity" => ["required"],
            ];
        }
    }
}