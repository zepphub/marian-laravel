<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class NewsletterSubscriptionRequest extends FormRequest
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
          'email' => 'required|unique:newsletter_subscriptions|email:rfc,dns',
          'whatsapp' => 'required|string|max:250',
        ];
    }

    public function messages()
     {
          return [
            'email.unique' => 'Este email ya esta registrado.'
          ];
     }
}
