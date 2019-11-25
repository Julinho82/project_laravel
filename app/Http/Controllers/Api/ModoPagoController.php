<?php

namespace App\Http\Controllers\Api; //Lugar de trabajo

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController; // Updated
use App\Models\ModoPago;
use App\Http\Requests\Api\ModoPagos\StoreRequest;
use App\Http\Requests\Api\ModoPagos\UpdateRequest;

class ModoPagoController extends BaseController
{
    //Listar todos los modoPagos
    public function index()
    {
        $modoPagoList = ModoPago::all();
        return $this->sendResponse($modoPagoList, "LISTA DE MODOPAGO RECUPERADO");
    }
    //Recuperar un ModoPago por id
    public function show(ModoPago $modoPago)
    {
        return $this->sendResponse($modoPago, "MODOPAGO RECUPERADO");
    }
    //Editar un ModoPago por id
    public function update(UpdateRequest $request, ModoPago $modoPago)
    {
        $modoPago->update($request->all());
        return $this->sendResponse($modoPago, "MODOPAGO EDITADO");
    }
    //Eliminar un ModoPago por id
    public function destroy(ModoPago $modoPago)
    {
        $modoPago->delete();
        return $this->sendResponse($modoPago, "MODOPAGO ELIMINADO");
    }

    //Crear un ModoPago
    public function store(StoreRequest $request)
    {
        $modoPago = ModoPago::create($request->all());
        return $this->sendResponse($modoPago, "MODOPAGO CREADO");
    }
}
