<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductsTypeSeeder;
use Database\Seeders\ServicesTypeSeeder;
use Database\Seeders\ProductsSeeder;
use Database\Seeders\ServicesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProductsTypeSeeder::class);
        $this->call(ServicesTypeSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(ServicesSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}