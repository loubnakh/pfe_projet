<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Support\facades\DB ;
use Illuminate\Database\Seeder;

class ouvragesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("fr_FR");
        for ($i = 0; $i < 9; $i++) {
          
        DB::table('ouvrages')->insert([
            
            'idouvrage' => $faker->unique()->ean13(),
            'num_l_j' => $faker->unique()->isbn10(),
            'title_ouvrage' => $faker->sentence(),
            'auteur' => $faker->name(),
            'edition_date' => $faker->date(),
            'support_accomp' => $faker->randomElement(['CD', 'DVD', 'Livre']),
            'quantite' => $faker->numberBetween(1, 100),
            'recu_le' => $faker->dateTime(),
            'origine' => $faker->country(),
            'code_secteur' => $faker->randomElement(['A', 'B', 'C']),
            'observation' => $faker->text(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        }
    }
}



