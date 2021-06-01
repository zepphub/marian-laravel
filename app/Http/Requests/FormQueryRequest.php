<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class FormQueryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'firstname' => 'required|string|max:250',
          'lastname' => 'required|string|max:250',
          'phone' => 'required|string|max:250',
          'email' => 'required|email:rfc,dns',
          'query' => 'required|string|max:250',
        ];
    }

    public function messages()
     {
          return [
          ];
     }
}
