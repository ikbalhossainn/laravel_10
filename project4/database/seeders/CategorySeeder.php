<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // need to add here

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Vegetable',
        ]);
        DB::table('categories')->insert([
            'name' => 'Fruit',
        ]);
        DB::table('categories')->insert([
            'name' => 'Masala',
        ]);
    }
}
