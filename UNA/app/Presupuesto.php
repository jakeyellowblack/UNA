<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
	
	
    protected $fillable = [
        'id', 'concepto', 'nombre', 'fecha', 'montoT',
    ];
	
 public function scopeBuscarpor($query, $tipo, $busqueda)
    {
		if (($tipo) && ($busqueda))
		{
			return $query->where($tipo, 'LIKE', "%$busqueda%");
		}
    }	
	
	
	
	
	}

