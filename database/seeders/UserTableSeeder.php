<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'aziz@gmail.com',
            'password' => bcrypt('12345678'),
            'created_at' => new \DateTime,
            'updated_at' => null
        ]);
    }
}