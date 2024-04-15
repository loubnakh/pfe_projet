<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create("fr_FR");

        for ($i = 0; $i < 9; $i++) {
            Book::create([
                'title' => $faker->sentence(3),
                'author' => $faker->name(),
                'description' => $faker->paragraph(),
                // Ajoutez d'autres colonnes si nécessaire
            ]);
        }
    }
}
