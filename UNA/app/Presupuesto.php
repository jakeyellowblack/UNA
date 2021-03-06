<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class Presupuesto extends Model
{
	
    protected $table = 'presupuestos';
		 const UPDATED_AT = null;
    public $timestamps = FALSE;

	
    protected $fillable = [
        'cuenta_id', 'created_at', 'tipo', 'concepto', 'montoT'
    ];
	
			 public function cuenta()
	{
		return $this->belongsTo(Cuenta::class, 'cuenta_id');
	}	
	

	


 public function scopeBuscarpor($query, $tipo, $busqueda)
    {
		if (($tipo) && ($busqueda))
		{
			return $query->where($tipo, 'LIKE', "%$busqueda%");
		}
    }
	
	
	
	
}

