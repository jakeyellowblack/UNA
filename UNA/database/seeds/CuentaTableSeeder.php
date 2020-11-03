<?php

use Illuminate\Database\Seeder;

class CuentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cuenta::class, 100)->create();
    }
}
