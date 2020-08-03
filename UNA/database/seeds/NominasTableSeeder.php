<?php

use Illuminate\Database\Seeder;

class NominasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Nomina::class, 50)->create();
    }
}
