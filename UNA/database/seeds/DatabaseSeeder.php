<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call(DepartamentoTableSeeder::class);
        $this->call(PresupuestosTableSeeder::class);
		$this->call(UserTableSeeder::class);
        $this->call(TrabajadorTableSeeder::class);
		$this->call(NominasTableSeeder::class);
		
		


    }        

}
