@extends('adminlte::page')

@section('title', 'Nuevo Producto')

@section('content_header')
    <h1>Nuevo Producto</h1>
@stop

@section('content')
<form action="/productos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" form="form-label">Codigo</label>
        <input id="Codigo" name="Codigo" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" form="form-label">Nombre</label>
        <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" form="form-label">Descripcion</label>
        <input id="Descripcion" name="Descripcion" type="text" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" form="form-label">Categoria</label>
        <select id="Categoria" name="Categoria" type="text" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" form="form-label">Cantidad</label>
        <input id="Cantidad" name="Cantidad" type="number" class="form-control" tabindex="6">
    </div>
    <div class="mb-3">
        <label for="" form="form-label">Precio</label>
        <input id="Precio" name="Precio" type="number" step="any" value="0.00" class="form-control" tabindex="7">
    </div>
    <a href="/productos" class="btn btn-secondary" tabindex="8">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop