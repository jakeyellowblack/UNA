<?php

use Illuminate\Database\Seeder;

class TrabajadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Trabajador::class, 50)->create();
    }
}
