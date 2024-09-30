<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CustomerSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',

            'name' => 'User one',
            'email' => 'winnie@gmail.com',

            'name' => 'John Doe',
           'email' => 'johndoe@example.com',
          'password' => Hash::make('password123'),
        ]);


    $this->call(CustomerSeeder::class);


    }
}
