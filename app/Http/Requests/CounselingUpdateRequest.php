<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CounselingUpdateRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'price_ars' => 'numeric|min:0|max:10000',
          'price_usd' => 'numeric|min:0|max:100',
          'video' => 'url',
        ];
    }

    public function messages()
     {
          return [
              'price_ars.digits' => __('digits'),
          ];
     }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
          if ($validator->errors()->isNotEmpty()) {
            $counseling_id = $this->request->get('counseling-id');
            $validator->errors()->add('counseling-id', $counseling_id);
          };
        });
    }
}
