<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','brand','description','id_type','price',
                            'stock','tecnicalDetails','expiration','status'];

    //para llave foranea
    public function type()
    {
        return $this->belongsTo(ProductsType::class, 'id_type','id');
    }
}