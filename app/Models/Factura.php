<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected $table='facturas';

    protected $filleable=['fecha'];

    protected $hidden=['created_at','updated_at','id_cliente','id_modo_pago'];
}
