<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Presupuesto extends Model
{
	
    protected $table = 'presupuestos';
		 const UPDATED_AT = null;

	
    protected $fillable = [
        'cuenta_id', 'created_at', 'tipo', 'concepto', 'montoT'
    ];
	
			 public function cuenta()
	{
		return $this->belongsTo(Cuenta::class);
	}	
	
 public function scopeBuscarpor($query, $tipo, $busqueda)
    {
		if (($tipo) && ($busqueda))
		{
			return $query->where($tipo, 'LIKE', "%$busqueda%");
		}
    }	
	
	
}

