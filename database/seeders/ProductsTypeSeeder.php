<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductsType;

class ProductsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductsType::create(['name' => 'Equipos','description' => '','status' => 1]);
        ProductsType::create(['name' => 'Insumos','description' => '','status' => 1]);
        ProductsType::create(['name' => 'Refacciones','description' => '','status' => 1]);
        
    }
}