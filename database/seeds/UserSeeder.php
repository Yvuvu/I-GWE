<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'role_id'=> '1',
            'passager_id'=>'1',
            'proprietaire_id'=>'1',
            'name'=>'admin',
            'email'=>'devwebfullstack@gmail.com',
            'password'=> Hash::make('admin'),
            

            
        ]);
    }
}
