<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items'; // Nombre de la tabla
    protected $primaryKey = 'item_id'; // Especifica la clave primaria

    // Define los atributos que se pueden llenar
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'size',
        'img1',
        'img2',
        'img3',
        'precautions',
        'storage',
        'handling',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'category_id');
    }
}
