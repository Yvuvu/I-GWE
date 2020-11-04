<?php

use Illuminate\Database\Seeder;

class VehiculeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vehicules')->insert([
            'id' => '1',
            'proprietaire_id' => '1',
            'categorie_id' => '1',
            'immatriculation' => 'BG00236',
            'cartegrise' => 'BG012345678',
            'marque' => 'Honda',
            'couleur' => 'noire',

        ]);
    }
}
