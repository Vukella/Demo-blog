<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'category_id', 'tag_id', 'story', 'published'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public static $rules = [
        'title' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'tag_id' => 'required|exists:tags,id',
        'story' => 'required|string',
        'published' => 'required|date',
    ];


}
