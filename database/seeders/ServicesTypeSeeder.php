<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServicesType;

class ServicesTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServicesType::create(['name' => 'Mantenimiento','description'=>'','status' => 1]);
        ServicesType::create(['name' => 'Capacitacion','description'=>'','status' => 1]);
        ServicesType::create(['name' => 'Auditorias','description'=>'','status' => 1]);
        ServicesType::create(['name' => 'Maquilas','description'=>'','status' => 1]);
    }
}