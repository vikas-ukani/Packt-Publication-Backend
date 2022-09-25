<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'title',
        'slug',
        'description',
        'is_active',
    ];

    /**
     * Category has Many Books
     */
    public function books()
    {
        return $this->hasMany(Books::class, 'category_id', 'id');
    }
}
