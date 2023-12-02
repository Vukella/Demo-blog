<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'tag_id' => 'required|exists:tags,id',
            'content' => 'required|string',
            'published' => 'nullable|date',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'category_id.exists' => 'The selected category does not exist.',
            'tag_id.exists' => 'The selected tag does not exist.',
            'tags.*.exists' => 'One or more selected tags do not exist.',
        ];
    }
}

?>