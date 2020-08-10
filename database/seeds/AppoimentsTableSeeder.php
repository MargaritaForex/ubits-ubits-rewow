<?php

use Illuminate\Database\Seeder;
use App\Appoiment;
use App\PetInformation;

class AppoimentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $pet_hercules = PetInformation::where('name', 'Hercules')->first();
        $petJugosa = PetInformation::where('name', 'Jugosa')->first();
        $petGustavo = PetInformation::where('name', 'gustavo')->first();

        $appoiment = new Appoiment();
        $appoiment->name = 'Corte de Pelo';
        $appoiment->appoiments_type_id = 2;
        $appoiment->save();
        $appoiment->petInformation()->attach($pet_hercules);

        $appoiment = new Appoiment();
        $appoiment->name = 'Consulta';
        $appoiment->appoiments_type_id = 1;
        $appoiment->save();
        $appoiment->petInformation()->attach($petJugosa);

        $appoiment = new Appoiment();
        $appoiment->name = 'Vacuna';
        $appoiment->appoiments_type_id = 1;
        $appoiment->save();
        $appoiment->petInformation()->attach($petGustavo);

        $appoiment = new Appoiment();
        $appoiment->name = 'Vacuna';
        $appoiment->appoiments_type_id = 1;
        $appoiment->save();
        $appoiment->petInformation()->attach($petGustavo);

    }
}
