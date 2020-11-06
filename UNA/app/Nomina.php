<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
      protected $fillable = [
	  	'id',
		'namefile',
		'title',
		'date',
	];
	
	 public function scopeBuscarpor($query, $tipo, $busqueda)
    {
		if (($tipo) && ($busqueda))
		{
			return $query->where($tipo, 'LIKE', "%$busqueda%");
		}
    }	
	
    public function mov_nomina()
    {
    	return $this->hasMany(MovNomina::class);
    }	
}
