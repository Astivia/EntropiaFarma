<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsType extends Model
{
    protected $table = 'productsType';
    protected $fillable = ['name','description','status'];
}