<?php

use Illuminate\Database\Seeder;

use App\Models\Cliente;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cliente::create([
            'nombre'=>'Julio Rafael',
            'apellido'=>'Daviú Arévalo',
            'direccion'=>'Ruiz de Orellana 1185',
            'fecha_nacimiento'=>'1982-07-31',
            'telefono'=>'79733270',
            'email'=>'j.daviu@empresasim.com'

        ]);
    }
}
