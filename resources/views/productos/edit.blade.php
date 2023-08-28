@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/productos/{{$producto->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" form="form-label">Codigo</label>
        <input id="Codigo" name="Codigo" type="text" class="form-control" tabindex="1" value="{{$producto->Codigo}}">
    </div>
    <div class="mb-3">
        <label for="" form="form-label">Nombre</label>
        <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="4" value="{{$producto->Nombre}}">
    </div>
    <div class="mb-3">
        <label for="" form="form-label">Descripcion</label>
        <input id="Descripcion" name="Descripcion" type="text" class="form-control" tabindex="2" value="{{$producto->Descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" form="form-label">Categoria</label>
        <input id="Categoria" name="Categoria" type="text" class="form-control" tabindex="3" value="{{$producto->Categoria}}">
    </div>
    <div class="mb-3">
        <label for="" form="form-label">Cantidad</label>
        <input id="Cantidad" name="Cantidad" type="number" class="form-control" tabindex="5" value="{{$producto->Cantidad}}">
    </div>
    <div class="mb-3">
        <label for="" form="form-label">Precio</label>
        <input id="Precio" name="Precio" type="number" step="any" value="0.00" class="form-control" tabindex="6" value="{{$producto->Precio}}">
    </div>
    <a href="/productos" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop