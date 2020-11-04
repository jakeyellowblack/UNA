<?php

use Illuminate\Database\Seeder;
use App\Presupuesto;

class PresupuestosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Presupuesto::class, 52)->create();
    }
}
