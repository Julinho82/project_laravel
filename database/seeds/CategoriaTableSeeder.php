<?php

use Illuminate\Database\Seeder;

use App\Models\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Categoria::create([
            'nombre'=>'Normal',
            'descripcion'=>'Categoria normal sin Promociones y/o Descuentos.'
        ]);

        Categoria::create([
            'nombre'=>'Especial',
            'descripcion'=>'Categoria especial con Promociones y/o Descuentos.'
        ]);
    }
}
