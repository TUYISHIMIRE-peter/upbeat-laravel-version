<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'categories_name',
        'categories_active',
        'categories_status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
