<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Ikbal Hossain',
            'email' => 'ikbalhossain125@gmail.com',
            'password' => Hash::make('admin125')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Nusrat Jahan',
            'email' => 'nusratjahan@gmail.com',
            'password' => Hash::make('admin125')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Tanzim Ferdousi',
            'email' => 'tanzimferdousi@gmail.com',
            'password' => Hash::make('admin125')
        ]);
        $productManager->assignRole('Product Manager');
    }
}
