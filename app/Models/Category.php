<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'sort'];

    protected $casts = [
        'name' => 'array',
    ];

    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
