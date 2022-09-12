<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use CitiesTableSeeder;
use Illuminate\Database\Seeder;
use StatesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test root',
            'email' => 'test@example.com',
        ]);
        $this->call(EstadoSeeder::class);
        $this->call(CidadeSeeder::class);
    }
}
