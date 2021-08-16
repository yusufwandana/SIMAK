<?php

use Illuminate\Database\Seeder;
use App\Dosen as Dosen;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::create([
            'nip'       =>  '10231041',
            'nama'      =>  'Reza Riono',
            'jk'        =>  'L',
            'email'     =>  'rezario87@gmail.com',
            'password'  =>  bcrypt('dosenidaman'),
            'avatar'    =>  'default.png',
            'role'      =>  'dosen'
        ]);
    }
}
