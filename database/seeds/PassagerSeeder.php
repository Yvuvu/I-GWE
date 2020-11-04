<?php

use Illuminate\Database\Seeder;

class PassagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('passagers')->insert([
            'nom' => 'DESSE',
            'prenom' => 'Félicité',
            'telephone' => '66552006',
            'numpiece' => '001154949',
            'email' => 'devwebfullstack@gmail.com',
            'adresse' => 'ouaga 2000',
        ]);
    }
}
