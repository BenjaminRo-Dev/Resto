<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;

class ProductoController extends Controller
{
    
    public function index()
    {
        return view('productos.index', [
            'productos' => Producto::all()
        ]);
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(StoreProductoRequest $request)
    {
        //
    }


    public function edit(Producto $producto)
    {
        //
    }

    public function update(UpdateProductoRequest $request, Producto $producto)
    {
        //
    }

    public function destroy(Producto $producto)
    {
        //
    }
}
