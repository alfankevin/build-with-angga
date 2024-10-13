<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'alfankevin',
            'email' => '8c.alfan@gmail.com',
            'password' => bcrypt('alfankevin'),
        ]);

        $admin->assignRole('admin');
    }
}
