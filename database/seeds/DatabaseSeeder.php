<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => Hash::make('test')
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@test.com',
            'password' => Hash::make('user')
        ]);
    }
}
