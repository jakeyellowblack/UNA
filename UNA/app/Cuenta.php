<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class Cuenta extends Model
{
      protected $fillable = [
	  	'id',
		'nombre',
		'numero',
	];
	
	public function presupuesto()
	{
		return $this->hasMany(Presupuesto::class);
	}
}
