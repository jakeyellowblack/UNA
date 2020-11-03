<?php

use Illuminate\Database\Seeder;
use App\Cuenta;

class CuentasTableSeeder extends Seeder
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
