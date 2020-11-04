<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovReformulacion extends Model
{
    public function reformulacion()
    {
    	return $this->belongsTo(Reformulacion::class);
    }
}
