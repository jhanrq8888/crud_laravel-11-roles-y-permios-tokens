<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Jean',
            'email' => 'jhan@gmail.com',
            'password' => bcrypt('admin1234'),
        ]);
        $user->assignRole('Administrador');
        User::factory(10)->create();
    }
}
