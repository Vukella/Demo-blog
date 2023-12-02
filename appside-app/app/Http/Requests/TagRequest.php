<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:tags',
            'slug' => 'required|string|max:255|unique:tags',
            'description' => 'nullable|string',
            'blogs' => 'array',
            'blogs.*' => 'exists:blogs,id',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'The tag name must be unique.',
            'slug.unique' => 'The tag slug must be unique.',
            'blogs.*.exists' => 'One or more selected blogs do not exist.',
        ];
    }
}
?>
