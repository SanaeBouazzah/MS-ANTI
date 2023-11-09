<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicationRequest extends FormRequest
{
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
            'titre' => 'required',
            'body'=> 'required',
            'image'=> 'image | mimes:png,jpeg,jpg'
        ];
    }

    public function messages(){
      return [
        'titre.required' => 'MS Anti requires Title have a value',
        'body.required' => 'MS Anti requires description have a value',
        'image.required' => 'MS Anti requires field have an image',
      ];
    }
}
