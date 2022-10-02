<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Tarık Maden',
            'email'=>'info@madensoft.com',
            'password'=>bcrypt(1020),
            'title'=>'',
            'desc'=>'',
        ]);
    }
}
