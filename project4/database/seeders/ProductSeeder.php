<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // need to add here


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Tomato',
            'description' => 'its a delicious food',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '1',
            'availability' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Cucumber',
            'description' => 'its a delicious food',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '1',
            'availability' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Mango',
            'description' => 'its a delicious food',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '2',
            'availability' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Banana',
            'description' => 'its a delicious food',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '2',
            'availability' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Turmaric',
            'description' => 'its a delicious food',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '3',
            'availability' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Cumin',
            'description' => 'its a delicious food',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '3',
            'availability' => '1',
        ]);
        
        
    }
}
