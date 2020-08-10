<?php

use Illuminate\Database\Seeder;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(PetsSeeder::class);
        $this->call(AppoimentsTypeTableSeeder::class);
        $this->call(PetInformationTableSeeder::class);
        $this->call(AppoimentsTableSeeder::class);

    }
}
