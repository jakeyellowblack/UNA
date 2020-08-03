<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Nomina;
use Faker\Generator as Faker;

$autoIncrement = autoIncrement();

$factory->define(App\Nomina::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();

    return [
	
	   'trabajador_id' => $autoIncrement->current(),
	   'salarioSemanal' => $faker->randomFloat(2, 1, 100),
	   'salarioDiario' => $faker->randomFloat(2, 1, 100),
	   'salarioHora' => $faker->randomFloat(2, 1, 100),
	   'salarioHoraExtraDiurno' => $faker->randomFloat(2, 1, 100),
	   'salarioIntegral' => $faker->randomFloat(2, 1, 100),
	   'feriado' => $faker->randomFloat(2, 1, 100),
	   'diasLaborados' => $faker->numberBetween(1, 50),
	   'utilidades' => $faker->randomFloat(2, 1, 100),
	   'montoTotal' => $faker->randomFloat(2, 1, 100),
    ];
});

function autoIncrement()
{
    for ($i = 0; $i < 1000; $i++) {
        yield $i;
    }
}