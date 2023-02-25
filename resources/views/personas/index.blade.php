@extends('adminlte::page')

@section('title', 'Personas')

@section('content_header')
    <h1><strong>Listado de Personas</strong></h1>
@stop

@section('content')
<a href="personas/create" class="btn btn-primary">AGREGAR</a>
<a class="btn btn-info">Editar</a> 
<button type="submit" class="btn btn-danger">Delete</button>

<table class="table table-striped table-hover">
    <thead>
        <tr>
           <th scope="col">Cod_Persona</th>
           <th scope="col">Nombre</th>
           <th scope="col">Genero</th>
           <th scope="col">Fecha Nacimiento</th>
           <th scope="col">Tipo Identificacion</th>
           <th scope="col">Sexo</th>
           <th scope="col">Creado por</th>
           <th scope="col">Modificado por</th>
           <th scope="col">Fecha Modificacion</th>

        </tr>
    </thead>
    
    
</table>


<div>
<a href="dash" class="btn btn-primary">SALIR</a>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop