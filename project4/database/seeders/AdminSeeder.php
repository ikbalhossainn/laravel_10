<?php

namespace Database\Seeders;

use App\Models\Admin; // need to add
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // need to add
use Illuminate\Support\Facades\Hash; // need to add


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // copy from internet
        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin125'),
            'status' => '1',
        ]);

            // After php artisan refresh seeder user also deleted. so, you need to create all table like this
            
        // DB::table('users')->insert([
        //     'name' => 'Ikbal Hossain',
        //     'email' => 'ikbalhossain125@gmail.com',
        //     'password' => Hash::make('admin125'),
        //     'status' => '1',
        // ]);
    }
}
