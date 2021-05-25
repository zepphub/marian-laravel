<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
{
    protected $redirectRoute = 'admin.posts.create';

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
          'title' => 'required|unique:posts|max:250',
          'body' => 'required',
          'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048',
        ];
    }

    public function messages()
     {
          return [
              'title.required' => __('Hace falta un título.'),
              'title.unique' => __('El título ya esta en uso.'),
              'title.max' => __('El título no puede ser mas de 250 caracteres.'),
              'body.required' => __('Hace falta un cuerpo para el artículo.'),
              'image.required' => __('Hace falta una imagen.'),
              'image.image' => __('La imagen debe ser una imagen.'),
              'image.max' => __('La imagen debe ser mas pequeña.'),
          ];
     }
}
