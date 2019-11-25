<?php

namespace App\Http\Controllers\Api; //Lugar de trabajo

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController; // Updated
use App\Models\Producto;
use App\Http\Requests\Api\Productos\StoreRequest;
use App\Http\Requests\Api\Productos\UpdateRequest;

class ProductoController extends BaseController
{
    //Listar todos los productos
    public function index()
    {
        $productoList = Producto::all();
        return $this->sendResponse($productoList, "LISTA DE PRODUCTOS RECUPERADA");
    }
    //Recuperar un producto por id
    public function show(Producto $producto)
    {
        return $this->sendResponse($producto, "PRODUCTO RECUPERADO");
    }
    //Editar un producto por id
    public function update(UpdateRequest $request, Producto $producto)
    {
        $producto->update($request->all());
        return $this->sendResponse($producto, "PRODUCTO EDITADO");
    }
    //Eliminar un producto por id
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return $this->sendResponse($producto, "PRODUCTO ELIMINADO");
    }

    //Crear un producto
    public function store(StoreRequest $request)
    {
        $producto = Producto::create($request->all());
        return $this->sendResponse($producto, "PRODUCTO CREADO");
    }
}
