<?php

use Illuminate\Database\Seeder;

class CuentasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cuenta::class, 50)->create();
    }
}
