<?php

use Illuminate\Database\Seeder;

class PetInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\PetInformation::create(['name' => 'Hercules','pets_id' => 2, 'age' => '6 años',
            'race' => 'pitbull','productimg' => "hercules 1578438734894.png" ]);

        App\PetInformation::create(['name' => 'Jugosa','pets_id' => 1, 'age' => '4 años',
            'race' => 'normal','productimg' => "jugosa 1578438734894.png" ]);


        App\PetInformation::create(['name' => 'gustavo','pets_id' => 3, 'age' => '2 años',
            'race' => 'pez payaso','productimg' => "gustavo 1578438734894.png" ]);


    }
}
