<?php

use Illuminate\Database\Seeder;
use App\PetInformation;

class PetInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $PetInformation = new PetInformation();
        $PetInformation->name = 'Hercules';
        $PetInformation->pets_id = 2;
        $PetInformation->age = '6 años';
        $PetInformation->race = 'pitbull';
        $PetInformation->productimg = "hercules 1578438734894.png";
        $PetInformation->save();

        $PetInformation = new PetInformation();
        $PetInformation->name = 'Jugosa';
        $PetInformation->pets_id = 1;
        $PetInformation->age = '4 años';
        $PetInformation->race = 'normal';
        $PetInformation->productimg = "jugosa 1578438734894.png";
        $PetInformation->save();

        $PetInformation = new PetInformation();
        $PetInformation->name = 'gustavo';
        $PetInformation->pets_id = 3;
        $PetInformation->age = '2 años';
        $PetInformation->race = 'pez payaso';
        $PetInformation->productimg = "gustavo 1578438734894.png";
        $PetInformation->save();

    }
}
