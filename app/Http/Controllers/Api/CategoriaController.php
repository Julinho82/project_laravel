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
        return $this->sendResponse($categoriaList, "LISTA DE CATEGORIAS RECUPERADA");
    }
    //Recuperar una categoria por id
    public function show(Categoria $categoria)
    {
        return $this->sendResponse($categoria, "CATEGORIA RECUPERADA");
    }
    //Editar una categoria por id
    public function update(UpdateRequest $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return $this->sendResponse($categoria, "CATEGORIAS EDITADA");
    }
    //Eliminar una categoria por id
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return $this->sendResponse($categoria, "CATEGORIAS ELIMINADA");
    }

    //Crear una categoria
    public function store(StroreRequest $request)
    {
        $categoria = Categoria::create($request->all());
        return $this->sendResponse($categoria, "CATEGORIAS CREADA");
    }

}
