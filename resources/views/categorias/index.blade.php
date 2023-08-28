@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>TERVOL S.A.</h1>
@stop

@section('content')
<a href="categorias/create" class="btn btn-primary mb-4">Nueva Categoria</a>

<table id="categorias" class="table table-striped shadow-lg mt-4" style="width:100%">

    <thead class="bg-primary text-white">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($categorias as $categoria)
    <tr>
        <td>{{$categoria->id}}</td>
        <td>{{$categoria->Nombre}}</td>
        <td>
            <form action="{{ route('categorias.destroy', $categoria->id)}}" method="post">
                <a href="/categorias/{{$categoria->id}}/edit" class="btn btn-info">Editar</a>
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
        $('#categorias').DataTable({
            "lengthMenu": [[5, 10, 50, -1],[5, 10, 50, "All"]]
        });
    });

    /*new DataTable('#example');*/
</script>
@stop