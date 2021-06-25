<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'id'=> 1,
        	'nik' => 33333333,
        	'nama' => 'Anindya',
        	'telp' => '082177654875',
            'username' => 'a@a.com',
            'password' => bcrypt('000000'),
        	'level' => 'admin'
        ]);
    }
}
