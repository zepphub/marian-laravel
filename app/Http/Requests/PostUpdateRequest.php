<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class PostUpdateRequest extends FormRequest
{
    //protected $redirectRoute = 'admin.posts.update';

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
        $this->merge([
            'slug' => Str::slug($this->title),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'title' => [ 'required', 'max:250', Rule::unique('posts')->ignore($this->post) ],
          'slug' => [ 'max:250', Rule::unique('posts')->ignore($this->post) ],
          'body' => 'required',
          'image' => 'image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048',
        ];
    }

    public function messages()
     {
          return [
              'title.required' => __('Hace falta un título.'),
              'title.unique' => __('Existe otro articulo con ese título.'),
              'title.max' => __('El título no puede ser mas de 250 caracteres.'),
              'slug.unique' => __('Existe otro articulo con ese título.'),
              'slug.max' => __('El título no puede ser mas de 250 caracteres.'),
              'body.required' => __('Hace falta un cuerpo para el artículo.'),
              'image.image' => __('La imagen debe ser una imagen.'),
              'image.mimes' => __('La imagen debe ser una imagen.'),
              'image.max' => __('La imagen debe ser mas pequeña.'),
          ];
     }
}
