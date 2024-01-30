<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;  // need to add here
use Illuminate\Support\Facades\DB;  // need to add here
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name'=> 'Ikbal Hossain',
            'email' => 'ikbalhossain125@gmail.com',
            'password' => Hash::make('admin125'),
            'status' => '1'

        ]);
    }
}
