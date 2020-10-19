<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
        protected $fillable = [
		'salarioSemanal',
		'salarioDiario',
		'salarioHora',
		'salarioHoraExtraDiurno',
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
	
	 public function scopeBuscarpor($query, $tipo, $busqueda)
    {
		if (($tipo) && ($busqueda))
		{
			return $query->where($tipo, 'LIKE', "%$busqueda%");
		}
    }	
	
	
}
