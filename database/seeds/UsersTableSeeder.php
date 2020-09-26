<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nom' => 'Admin Admin',
            'prenom' => 'Admin Admin',
            'email' => 'admin@argon.com',
            'etat_inscription' => false,
            'profil' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'nom' => 'prof',
            'prenom' => 'prof',
            'email' => 'anaskadri@gmail.com',
            'etat_inscription' => false,
            'profil' => 'prof',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
