<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Services;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Services::create(['id_type' => 1,
                    'description'=>'Calderas',
                    'price'=>0.0,'status' => 1]);
        Services::create(['id_type' => 1,
                    'description'=>'Generadores de Vapor Puro o Industrial',
                    'price'=>0.0,'status' => 1]);
        Services::create(['id_type' => 1,
                    'description'=>'Sub-Estaciones',
                    'price'=>0.0,'status' => 1]);
        Services::create(['id_type' => 1,
                    'description'=>'Chiller',
                    'price'=>0.0,'status' => 1]);
        Services::create(['id_type' => 1,
                    'description'=>'Etiquetadoras',
                    'price'=>0.0,'status' => 1]);
        Services::create(['id_type' => 1,
                    'description'=>'Dosificadoras de ampolletas',
                    'price'=>0.0,'status' => 1]);
        Services::create(['id_type' => 1,
                    'description'=>'Tableteadoras',
                    'price'=>0.0,'status' => 1]);
        Services::create(['id_type' => 1,
                    'description'=>'Contadoras de Capsulas y tabletas',
                    'price'=>0.0,'status' => 1]);
        Services::create(['id_type' => 2,
                    'description'=>'Tipos de Usuarios',
                    'price'=>0.0,'status' => 1]);
        Services::create(['id_type' => 3,
                    'description'=>'Internas',
                    'price'=>0.0,'status' => 1]);
        Services::create(['id_type' => 3,
                    'description'=>'Proveedores',
                    'price'=>0.0,'status' => 1]);
        Services::create(['id_type' => 4,
                    'description'=>'Etiquetado',
                    'price'=>0.0,'status' => 1]);
        Services::create(['id_type' => 4,
                    'description'=>'Emplayado',
                    'price'=>0.0,'status' => 1]);
        Services::create(['id_type' => 4,
                    'description'=>'Termocogimiento',
                    'price'=>0.0,'status' => 1]);
        Services::create(['id_type' => 4,
                    'description'=>'Acondicionamiento Secundario',
                    'price'=>0.0,'status' => 1]);
    }
}