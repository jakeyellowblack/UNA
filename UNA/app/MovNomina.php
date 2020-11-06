<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovNomina extends Model
{
	
      protected $fillable = [
	  	'id',
		'code',
		'amount',
	];	
	
    public function nomina()
    {
    	return $this->belongsTo(Nomina::class);
    }
}
