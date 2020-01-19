<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // test users
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
