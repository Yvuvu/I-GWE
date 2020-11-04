<?php

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

        // $this->call(UserSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(PassagerSeeder::class);
        $this->call(ProprietaireSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(VehiculeSeeder::class);
        $this->call(ConducteurSeeder::class);
        $this->call(CarteSeeder::class);
    }
}
