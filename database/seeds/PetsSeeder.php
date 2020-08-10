<?php

use Illuminate\Database\Seeder;

class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Pet::create(['name' => 'Cat']);

        App\Pet::create(['name' => 'Dog']);

        App\Pet::create(['name' => 'Fish']);

        App\Pet::create(['name' => 'Other']);

    }
}
