<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
      protected $fillable = [
	  	'id',
		'nombre',
		'numero',
	];
	
	public function presupuesto()
	{
		return $this->belongsTo(Presupuesto::class);
	}
}
