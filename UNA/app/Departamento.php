<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	public function trabajador()
	{
		return $this->belongsTo(Trabajador::class);
	}
}
