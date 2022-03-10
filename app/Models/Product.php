<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
            // ->withPivot(['categories']);
    }
}
