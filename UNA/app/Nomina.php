<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
        protected $fillable = [
		'salarioSemanal',
		'salarioDiario',
		'salarioHora',
		'salarioHoraExtraDiurna',
		'salarioIntegral',
		'feriado',
		'diasLaborados',
		'utilidades',
		'montoTotal',

	];
	
	public function trabajador()
	{
		return $this->belongsTo(Trabajador::class);
	}
}
