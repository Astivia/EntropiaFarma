<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create(['name' => 'E-Liquid-Filling','brand' => '',
                          'description'=>'','id_type'=>1,
                          'price'=>0.0,'stock'=>1,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        Products::create(['name' => 'Glass Ampoule Filing','brand' => '',
                          'description'=>'','id_type'=>1,
                          'price'=>0.0,'stock'=>1,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        Products::create(['name' => 'Plastic Ampoule Filling','brand' => '',
                          'description'=>'','id_type'=>1,
                          'price'=>0.0,'stock'=>1,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        Products::create(['name' => 'Suppository Filling Sealing','brand' => '',
                          'description'=>'','id_type'=>1,
                          'price'=>0.0,'stock'=>1,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        Products::create(['name' => 'Labeling Pack','brand' => '',
                          'description'=>'','id_type'=>1,
                          'price'=>0.0,'stock'=>1,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        Products::create(['name' => 'Cartoning Pack','brand' => '',
                          'description'=>'','id_type'=>1,
                          'price'=>0.0,'stock'=>1,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        Products::create(['name' => 'Blister Pack','brand' => '',
                          'description'=>'','id_type'=>1,
                          'price'=>0.0,'stock'=>1,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        Products::create(['name' => 'Bottle Pack','brand' => '',
                          'description'=>'','id_type'=>1,
                          'price'=>0.0,'stock'=>1,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        Products::create(['name' => 'Bag Pack','brand' => '',
                          'description'=>'','id_type'=>1,
                          'price'=>0.0,'stock'=>1,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        ////////////////////////////////////////////////////////////////////
        Products::create(['name' => 'Capsulas de Filtracion','brand' => '',
                          'description'=>'','id_type'=>2,
                          'price'=>0.0,'stock'=>10,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        Products::create(['name' => 'Gasa en Rollo','brand' => '',
                          'description'=>'','id_type'=>2,
                          'price'=>0.0,'stock'=>10,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        Products::create(['name' => 'Guantes de nitrilo','brand' => '',
                          'description'=>'','id_type'=>2,
                          'price'=>0.0,'stock'=>10,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        Products::create(['name' => 'Guantes de Latex','brand' => '',
                          'description'=>'','id_type'=>2,
                          'price'=>0.0,'stock'=>10,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        Products::create(['name' => 'Guantes Esteriles','brand' => '',
                          'description'=>'','id_type'=>2,
                          'price'=>0.0,'stock'=>10,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        Products::create(['name' => 'Hisopo Esteril','brand' => '',
                          'description'=>'','id_type'=>2,
                          'price'=>0.0,'stock'=>10,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
        Products::create(['name' => 'Zapatos de seguridad','brand' => '',
                          'description'=>'','id_type'=>2,
                          'price'=>0.0,'stock'=>10,
                          'tecnicalDetails'=>'','expiration'=>"2024-01-01",
                          'status' => 1]);
    }
}