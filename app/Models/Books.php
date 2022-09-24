<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        "body",
        "category_id",
        "auther",
        "image",
        "price",
        "status", // PUBLISHED, DRAFT,
    ];



    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
