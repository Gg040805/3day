<?php

namespace Database\Seeders;

use App\Models\product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        product::create([
            'p_name'=>'Tomato',
            'p_mass'=>'100',
            'p_price'=>'2',
        ]);
        product::create([
            'p_name'=>'Potato',
            'p_mass'=>'100',
            'p_price'=>'5',
        ]);
        product::create([
            'p_name'=>'Spinach',
            'p_mass'=>'500',
            'p_price'=>'10',
        ]);
        product::create([
            'p_name'=>'Brocoli',
            'p_mass'=>'200',
            'p_price'=>'5',
        ]);
        product::create([
            'p_name'=>'Cabbage',
            'p_mass'=>'500',
            'p_price'=>'10',
        ]);
    }
}
