<?php

use Illuminate\Database\Seeder;

class PresupuestosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Presupuesto::class, 50)->create();
    }
}
