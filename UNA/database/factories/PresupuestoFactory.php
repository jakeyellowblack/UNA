<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Presupuesto;
use Faker\Generator as Faker;

$autoIncrement = autoIncrement();

$factory->define(App\Presupuesto::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();
		
    return [
		'cuenta_id' => $autoIncrement->current(),
        'created_at' => $faker->date,
		'tipo' => $faker->randomElement(['ingreso', 'egreso']),
		'concepto' => $faker->text(20),
		'montoT' => $faker->randomFloat(2, 1, 100),
    ];
});

function autoIncrement()
{
    for ($i = 0; $i < 1000; $i++) {
        yield $i;
    }
}