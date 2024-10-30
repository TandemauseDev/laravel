<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_categories'; 


    public function items()
    {
        return $this->hasMany(Item::class, 'category_id', 'category_id');
    }
}