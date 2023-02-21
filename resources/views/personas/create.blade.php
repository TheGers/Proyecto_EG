@extends('adminlte::page')

@section('title', 'Personas')

@section('content_header')
    <h1><strong>Agregar nueva Persona</strong></h1>
@stop

@section('content')
<form action="/tbl_personas" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre de la persona</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Genero de la persona</label>
    <input id="genero" name="genero" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha de Nacimiento</label>
    <input id="fecha_nacimiento" name="fecha_nacimiento" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo identificacion</label>
    <input id="tipo_identificacion" name="tipo_identificacion" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Creado Por</label>
    <input i="CREADO_POR" name="CREADO_POR" type="text" class="form-control" tabindex="2">
  </div>
  <a href="/personas" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop