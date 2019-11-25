<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use App\Models\Categoria;
use App\Http\Requests\Api\Categorias\StroreRequest;
use App\Http\Requests\Api\Categorias\UpdateRequest;

class CategoriaController extends BaseController
{
    //Listar todos las categorias
    public function index()
    {
        $categoriaList = Categoria::all();
        return $this->sendResponse($categoriaList, "LISTA DE CLIENTES RECUPERADA");
    }
    //Recuperar una categoria por id
    public function show(Categoria $categoriaList)
    {
        return $this->sendResponse($categoriaList, "CLIENTE RECUPERADO");
    }
    //Editar una categoria por id
    public function update(UpdateRequest $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return $this->sendResponse($categoria, "CLIENTE EDITADO");
    }
    //Eliminar una categoria por id
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return $this->sendResponse($categoria, "CLIENTE ELIMINADO");
    }

    //Crear una categoria
    public function store(StroreRequest $request)
    {
        $categoria = Categoria::create($request->all());
        return $this->sendResponse($categoria, "CLIENTE CREADO");
    }

}
