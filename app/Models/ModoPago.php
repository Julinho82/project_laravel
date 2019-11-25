<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModoPago extends Model
{
    //
    protected $table='modo_pagos';

    protected $filleable=[
        'nombre',
        'descripcion'

    ];

    protected $hidden= ['created_at','updated_at'];
}
