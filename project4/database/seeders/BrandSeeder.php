<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            $brands =[
                [
                    'name' => 'Samsung',
                    'description' => 'Samsung Brand',
                    'logo' => 'https://dummyimage.com/200*300/000/fff&text=Samsung',
                ],
                [
                    'name' => 'Google',
                    'description' => 'Google Pixel Brand',
                    'logo' => 'https://dummyimage.com/200*300/000/fff&text=Google'
                ],
                [
                    'name' => 'LG',
                    'description' => 'LG Brand',
                    'logo' => 'https://dummyimage.com/200*300/000/fff&text=LG'
                ],
            ];
        
        foreach ($brands as $key => $value){
            Brand::create($value);
        }
    }
}
