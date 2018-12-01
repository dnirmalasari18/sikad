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
        User::create([
            'username'=>'KDPM',
            'role'=>'KDPM',
        	'password'=>bcrypt('kdpm'),
        ]);
        User::create([
            'username'=>'Kape',
            'role'=>'KP',
        	'password'=>bcrypt('kape'),
        ]);
        User::create([
            'username'=>'Maba',
            'role'=>'Mahasiswa Baru',
        	'password'=>bcrypt('maba'),
    	]);
    }
}
