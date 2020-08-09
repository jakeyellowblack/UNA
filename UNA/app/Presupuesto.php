<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $fillable = [
        'id', 'concepto', 'nombre', 'fecha', 'montoT',
    ];}

