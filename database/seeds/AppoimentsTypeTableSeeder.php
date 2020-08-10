<?php

use Illuminate\Database\Seeder;

class AppoimentsTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\AppoimentType::create(['type_of_appointment' =>'medicalSevices']);
        App\AppoimentType::create(['type_of_appointment' =>'spa']);
    }
}
