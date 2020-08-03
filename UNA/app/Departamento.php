<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	
   protected $fillable = [
		'nombre',
		'codigo',
	];
	
	public function trabajador()
	{
		return $this->belongsTo(Trabajador::class);
	}
}
