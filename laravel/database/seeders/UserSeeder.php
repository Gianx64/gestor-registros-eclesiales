<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Secretaria1',
            'email' => 'secretaria1@gmail.com',
            'password' => bcrypt('secret'),
        ])->assignRole('Secretaria');

        User::create([
            'name' => 'Secretaria2',
            'email' => 'secretaria2@gmail.com',
            'password' => bcrypt('secret'),
        ])->assignRole('Secretaria');
    }
}
