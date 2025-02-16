<?php

namespace Database\Seeders;

use App\Models;
use App\Models\User;
use App\Models\Products;
use Illuminate\Database\Seeder;
use Database\Factories\ProductsFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Products::factory(10)->create();

        User::factory(10)->create();

        User::factory()->create([
            'name' => 'phoenix',
            'email' => 'phoenix@example.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
