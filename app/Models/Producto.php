<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table='productos';

    protected $filleable=[
        'nombre',
        'precio',
        'stock'
    ];

    protected $hidden=['created_at','updtaed_at'];
}
