<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index')->with('productos',$productos);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos = new Producto();
        $productos -> Codigo = $request -> get('Codigo');
        $productos -> Nombre = $request -> get('Nombre');
        $productos -> Descripcion = $request -> get('Descripcion');
        $productos -> Cantidad = $request -> get('Cantidad');
        $productos -> Precio = $request -> get('Precio');

        $productos->save();
        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::find($id);
        return view('productos.edit')->with('producto',$producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::find($id);

        $producto -> Codigo = $request -> get('Codigo');
        $producto -> Nombre = $request -> get('Nombre');
        $producto -> Descripcion = $request -> get('Descripcion');
        $producto -> Cantidad = $request -> get('Cantidad');
        $producto -> Precio = $request -> get('Precio');

        $producto->save();
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        $producto -> delete();
        return redirect('/productos');
    }
}
