<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\facades\DB ;
class EmprunteurSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     */
    public function run():Void
    {
        $faker = Faker::create("fr_FR");

        for ($i = 0; $i < 9; $i++) {
            DB::table('emprunteurs')->insert([
                'matricule' => $faker->unique()->randomNumber(8),
                'nom' => $faker->lastName(),
                'prenom' => $faker->firstName(),
                'code_filiere' => $faker->randomElement(['TDI', 'TRI', 'ATV']),
                'type_Employe' => $faker->randomElement(['Surveillant', 'Formateur', 'Stagiaire','Directeur','Gestionnaire']),
                'mot_passe' => bcrypt($faker->password()),
                'telephone' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail(),
            ]);
        }
    }
}