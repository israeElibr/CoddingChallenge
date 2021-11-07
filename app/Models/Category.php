<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{  
    protected $table = "category";
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    use HasFactory;
}
