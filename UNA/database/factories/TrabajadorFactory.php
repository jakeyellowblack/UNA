<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Trabajador;
use Faker\Generator as Faker;

$autoIncrement = autoIncrement();

$factory->define(Trabajador::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();
	
    return [
	
	    'departamento_id' => $autoIncrement->current(),
        'nombre' => $faker->name,
        'apellido' => $faker->lastname,
		'cedula' => rand(1000000, 9999999),
        'cargo' => $faker->text(10),
        'fechaIngreso' => $faker->date,
		'sueldo' => $faker->randomFloat(2, 1, 100),
    ];
});

