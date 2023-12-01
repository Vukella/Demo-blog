<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'description'];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
    public static $rules = [
        'name' => 'required|string|max:255',
        'slug' => 'required|string|unique:categories,slug',
        'description' => 'nullable|string',
    ];
}
