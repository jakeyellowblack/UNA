<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovReformulacion extends Model
{
		      protected $fillable = [
	  	'id',
		'code',
		'amount',
	];
	
	
    public function reformulacion()
    {
    	return $this->belongsTo(Reformulacion::class);
    }
}
