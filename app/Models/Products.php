<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','price','description', 'category','stock','status'];

    //para llave foranea
    // public function genero()
    // {
    //     return $this->belongsTo(Genero::class, 'id_genero','id');
    // }
}
