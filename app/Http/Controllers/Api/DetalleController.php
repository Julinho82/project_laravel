<?php

namespace App\Http\Controllers\Api; //Lugar de trabajo

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController; // Updated
use App\Models\Detalle;
use App\Http\Requests\Api\Detalles\StoreRequest;
use App\Http\Requests\Api\Detalles\UpdateRequest;

class DetalleController extends BaseController
{
     //Listar todos los detalles
     public function index()
     {
         $detalleList = Detalle::all();
         return $this->sendResponse($detalleList, "LISTA DE DETALLE RECUPERADA");
     }
     //Recuperar un detalle por id
     public function show(Detalle $detalle)
     {
         return $this->sendResponse($detalle, "DETALLE RECUPERADO");
     }
     //Editar un detalle por id
     public function update(UpdateRequest $request, Detalle $detalle)
     {
         $detalle->update($request->all());
         return $this->sendResponse($detalle, "DETALLE EDITADO");
     }
     //Eliminar un detalle por id
     public function destroy(Detalle $detalle)
     {
         $detalle->delete();
         return $this->sendResponse($detalle, "DETALLE ELIMINADO");
     }
 
     //Crear un detalle
     public function store(StoreRequest $request)
     {
         $detalle = Detalle::create($request->all());
         return $this->sendResponse($detalle, "DETALLE CREADO");
     }
}
