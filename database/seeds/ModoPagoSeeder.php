<?php

use Illuminate\Database\Seeder;

use App\Models\ModoPago;

class ModoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ModoPago::create([
            'nombre'=>'Pago en efectivo',
            'otros_detalles'=>'El pago se lo realiza en efectivo.'
        ]);

        ModoPago::create([
            'nombre'=>'Pago con Tarjeta',
            'otros_detalles'=>'El pago se lo realiza con tarjeta débito o crédito.'
        ]);
    }
}
