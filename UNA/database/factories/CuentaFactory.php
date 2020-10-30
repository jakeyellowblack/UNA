<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cuenta;
use Faker\Generator as Faker;

$factory->define(App\Cuenta::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(10),
		'numero' => rand(1000000, 9999999),
    ];
});
