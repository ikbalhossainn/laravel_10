<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=> 'Mehedi Hassan Shuvo',
            'email' => 'mededihasanshuvo@gmail.com',
            'password' => Hash::make('admin125'),
            'status' => '1'

        ]);
    }
}
