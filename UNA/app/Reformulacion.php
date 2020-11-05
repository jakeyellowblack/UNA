<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reformulacion extends Model
{
	
	      protected $fillable = [
	  	'id',
		'title',
		'date',
	];
	
    public function mov_reformulacions()
    {
    	return $this->hasMany(MovReformulacion::class);
    }
}
