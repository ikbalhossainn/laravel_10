<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // need to add here
use Illuminate\Support\Facades\Hash; // need to add here


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Ikbal Hossain',
            'email' => 'ikbalhossain125@gmail.com',
            'password' => Hash::make('admin125'),
        ]);
    }
}
