<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;

use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('productos.index',compact('productos'));
    }
}
