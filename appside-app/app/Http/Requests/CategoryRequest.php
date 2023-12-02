<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:categories',
            'slug' => 'required|string|max:255|unique:categories',
            'description' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'The category name must be unique.',
            'slug.unique' => 'The category slug must be unique.',
        ];
    }
}



?>