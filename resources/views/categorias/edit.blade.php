@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/categorias/{{$categoria->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" form="form-label">Nombre</label>
        <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="4" value="{{$categoria->Nombre}}">
    </div>
    <a href="/categorias" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop