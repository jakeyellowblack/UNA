<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
	
	protected $fillable = [
		'nombre',
		'apellido',
		'cedula',
		'cargo',
		'fechaIngreso',
		'sueldo',
	];
	
	
    	 public function nomina()
	{
		return $this->belongsTo(Nomina::class);
	}
	
		 public function departamento()
	{
		return $this->belongsTo(Departamento::class);
	}
}
