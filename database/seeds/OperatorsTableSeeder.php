<?php

use App\Operator;
use Illuminate\Database\Seeder;

class OperatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // operators
        Operator::create(['name' => 'beeline']);
        Operator::create(['name' => 'vodafone']);
        Operator::create(['name' => 'yota']);
        Operator::create(['name' => 'mts']);
    }
}
