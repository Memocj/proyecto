@extends('adminlte::page')

@section('title', 'Nueva Categoria')

@section('content_header')
    <h1>Nuevo Categoria</h1>
@stop

@section('content')
<form action="/categorias" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" form="form-label">Nombre</label>
        <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="1">
    </div>
    <a href="/categorias" class="btn btn-secondary" tabindex="2">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop