<?php

use Illuminate\Database\Seeder;

class CarteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cartes')->insert([
            ['nom' => 'festival', 'latitude' => '43.9486489','longitude' => '4.8057665'],
            ['nom' => 'titis', 'latitude' => '12.3735997','longitude' => '-1.493944'],
            ['nom' => 'UO-JKZ', 'latitude' => '12.3794423','longitude' => '-1.499069'],
            ['nom' => 'HOSCO', 'latitude' => '48.8330652','longitude' => '2.5264992'],
            ['nom' => 'Scolacticat', 'latitude' => '12.3754015','longitude' => '-1.4884597']
        ]);
    }
}
