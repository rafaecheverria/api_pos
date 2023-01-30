<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MarcaSeeder::class);

         \App\Models\User::factory(1000)->create();

         \App\Models\User::factory()->create([
             'nombre' => 'Rafa Echeverria',
             'username' => 'recheverria',
             'email' => 'rafaecheverria@live.cl',
             'password' => bcrypt('raer2608'),
             'tipo' => 1,
             'estado' => 1,
         ]);

    }
}
