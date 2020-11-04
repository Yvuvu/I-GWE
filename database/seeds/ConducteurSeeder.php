<?php

use Illuminate\Database\Seeder;

class ConducteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('conducteurs')->insert([
            'id' => '1',
            'vehicule_id' => '1',
            'proprietaire_id' => '1',
            'nom' => 'KABORE',
            'prenom' => 'Martin',
            'telephone' => '62751111',
            'numpiece' => '000154949',
            'email' => 'felicitemaryvonne@gmail.com',
            'adresse' => '1200 logements,rue 6',
            'photo' => 'photo/chauffeur1.jpg',
        ]);
    }
}
