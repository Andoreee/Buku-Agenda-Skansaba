<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Alfian Gading Saputra',
            'email' => 'alfian@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Andrean Revaldi Dimas Erlangga',
            'email' => 'andrean@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Dewa Wahyu Irlandi',
            'email' => 'dewa@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => true
        ]);
    }
}