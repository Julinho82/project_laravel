<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use App\Models\Factura;
use App\Http\Requests\Api\Facturas\StoreRequest;
use App\Http\Requests\Api\Facturas\UpdateRequest;

class FacturaController extends BaseController
{
    //Listar todos las facturas
    public function index()
    {
        $facturaList = Factura::all();
        return $this->sendResponse($facturaList, "LISTA DE FACTURAS RECUPERADA");
    }
    //Recuperar una factura por id
    public function show(Factura $factura)
    {
        return $this->sendResponse($factura, "FACTURA RECUPERADA");
    }
    //Editar una factura por id
    public function update(UpdateRequest $request, Factura $factura)
    {
        $factura->update($request->all());
        return $this->sendResponse($factura, "FACTURAS EDITADA");
    }
    //Eliminar una factura por id
    public function destroy(Factura $factura)
    {
        $factura->delete();
        return $this->sendResponse($factura, "FACTURAS ELIMINADA");
    }

    //Crear una factura
    public function store(StoreRequest $request)
    {
        $factura = Factura::create($request->all());
        return $this->sendResponse($factura, "FACTURAS CREADA");
    }

}
