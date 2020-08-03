<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(App\Presupuesto::class, function (Faker $faker) {
    return [
        'concepto' => $faker->text(20),
        'nombre' => $faker->name,
        'fecha' => $faker->date,
		'montoT' => $faker->randomFloat(2, 1, 100),

    ];
});
