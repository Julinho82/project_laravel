<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    //
    protected $table='detalles';

    protected $fillable=[
        'cantidad',
        'precio'
    ];

    protected $hidden=['created_at','updated_at','id_factura','id_producto'];
}
