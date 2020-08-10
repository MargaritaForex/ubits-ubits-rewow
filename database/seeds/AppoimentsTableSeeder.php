<?php

use Illuminate\Database\Seeder;

class AppoimentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Appoiment::create(['name' => 'Corte de Pelo', 'appoiments_type_id' => 2]);

        App\Appoiment::create(['name' => 'Consulta', 'appoiments_type_id' => 1]);

        App\Appoiment::create(['name' => 'Vacuna', 'appoiments_type_id' => 1]);
    }
}
