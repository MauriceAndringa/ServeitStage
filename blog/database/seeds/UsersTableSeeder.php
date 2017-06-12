<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'first_name' => 'Kevin',
            'last_name' => 'Geubels',
            'role' => 'Beheerder',
            'location' => 'Zeewolde'
        ]);

        \App\User::create([
            'first_name' => 'Maurice',
            'last_name' => 'Andringa',
            'role' => 'Invaller',
            'location' => 'Zwolle'
        ]);

        \App\User::create([
            'first_name' => 'Jack',
            'last_name' => 'Wall',
            'role' => 'Beheerder',
            'location' => 'Harderwijk'
        ]);

        //CREATE MULTIPLE RANDOM USERS
        //factory(\App\User::class, 3)->create([
        //	'role' => 'Beheerder'
        //]);

        //factory(\App\User::class, 5)->create([
        //	'role' => 'Invaller']);
        //]);
    }
}
