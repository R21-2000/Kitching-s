<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = [
            [
                'username' => 'Admin1',
                'password' => bcrypt('adminn'),
                'role' => 'ADMIN'
            ],
            [
                'username' => 'Waiter',
                'password' => bcrypt('Weiter'),
                'role' => 'WAITER'
            ],
            [
                'username' => 'Kasir',
                'password' => bcrypt('kasirr'),
                'role' => 'KASIR'
            ],
            [
                'username' => 'Owner',
                'password' => bcrypt('auner'),
                'role' => 'OWNER   '
            ]
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}