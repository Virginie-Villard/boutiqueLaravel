<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backoffice extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image'
    ];
}
