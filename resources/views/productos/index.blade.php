@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>TERVOL S.A.</h1>
@stop

@section('content')
<a href="productos/create" class="btn btn-primary mb-4">Nuevo Producto</a>

<table id="productos" class="table table-striped shadow-lg mt-4" style="width:100%">

    <thead class="bg-primary text-white">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Categoria</th>
        <th scope="col">Stock</th>
        <th scope="col">Precio</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($productos as $producto)
    <tr>
        <td>{{$producto->id}}</td>
        <td>{{$producto->Codigo}}</td>
        <td>{{$producto->Nombre}}</td>
        <td>{{$producto->Descripcion}}</td>
        <td>{{$producto->Categoria}}</td>
        <td>{{$producto->Cantidad}}</td>
        <td>{{$producto->Precio}}</td>
        <td>
            <form action="{{ route('productos.destroy', $producto->id)}}" method="post">
                <a href="/productos/{{$producto->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button href="#" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function(){
        $('#productos').DataTable({
            "lengthMenu": [[5, 10, 50, -1],[5, 10, 50, "All"]]
        });
    });

    /*new DataTable('#example');*/
</script>
@stop