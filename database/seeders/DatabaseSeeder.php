<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Muhammad Irfan Febrian',
            'role' => 'member',
            'username' => 'febbriannn',
            'email' => 'irfan@example.com',
            'prof_pic' => 'books/nkcthi.jpg',
            'password' => 'febbriannn123'
        ]);

        \App\Models\User::create([
            'name' => 'Agastya Adrian Shalonte',
            'role' => 'admin',
            'username' => 'agastyaaa',
            'email' => 'agas@example.com',
            'prof_pic' => 'books/nkcthi.jpg',
            'password' => 'agastyaaa123'
        ]);

        \App\Models\User::create([
            'name' => 'Indro Pranoto',
            'role' => 'pustakawan',
            'username' => 'indrooo',
            'email' => 'indro@example.com',
            'prof_pic' => 'books/nkcthi.jpg',
            'password' => 'indrooo123'
        ]);
    }
}
