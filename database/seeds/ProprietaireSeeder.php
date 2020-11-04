<?php

use Illuminate\Database\Seeder;

class ProprietaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('proprietaires')->insert([
            'id' => '1',
            'nom' => 'OUEDRAOGO',
            'prenom' => 'Diane',
            'telephone' => '76166336',
            'numpiece' => '001154949',
            'email' => 'dianesandrineoued@gmail.com',
            'adresse' => 'Bendongo',

        ]);
    }
}
