<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';
    protected $fillable = ['name','price','description', 'category','status'];

    //para llave foranea
    // public function genero()
    // {
    //     return $this->belongsTo(Genero::class, 'id_genero','id');
    // }
}
