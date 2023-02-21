@extends('adminlte::page')

@section('css')
<!-- <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet"> -->
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop


@section('title', 'Productos')

@section('content_header')
    <h3>Hola</h3>
@stop

@section('content')

<div class="Formulario"  style="width:800px; margin:1px auto; padding:100px;  background-color: rgb(125, 223, 206);"  >
            <div class="row">
                <div class="col-12">
                    
                    <h3 style="text-align:center">
                        Agregar Producto
                    </h3>
                </div>
                <div class="col-12" style="font-weight:bold">
                    <form class="producto">
                       
                        <label for="" >Código Producto</label>
                        <input type="text" id="CodigoProducto" class="form-control"  placeholder="Ingrese el código del producto">
                        <br>
                        <label for="">Nombre Producto</label>
                        <input type="text" id="NombreProducto" class="form-control" placeholder="Ingrese el nombre del prodcuto">
                        <br>
                        <label for="">Precio Producto</label>
                        <input type="text" id="PrecioProducto" class="form-control" placeholder="Ingrese el precio del producto">
                        <br>
                        <label for="">Existencia</label>
                        <input type="text" id="Existencia" class="form-control" placeholder="Ingrese la existencia del prodcuto">
                        <br>
                        <label for="">Categoría</label>
                        <input type="text" id="Categoria" class="form-control" placeholder="Ingrese la categoría del producto">
                        <br>
                        <label for="">FECHA_CREACION</label>
                        <input type="date" id="FechaCreacion" class="form-control" placeholder="Ingrese la fecha de creación">
                        <br>
                        <label for="">MODIFICADO_POR</label>
                        <input type="date" id="ModificadoPor" class="form-control" placeholder="Ingrese el nombre del modificador">
                        <br>
                        <label for="">FECHA_MODIFICACION</label>
                        <input type="date" id="FechaModificacion" class="form-control" placeholder="Ingrese la fecha de modificación">
                        <br>
                        <label for="">Estado</label>
                        <input type="text" id="estado" class="form-control" placeholder="Ingrese el estado">
                        <hr>
                        <div id="btnAgregarProducto" style="text-align:right">
                            <input  type="submit" id="btnAgregar" onclick="AgregarEscritor()" value="Ingresar Producto" class="btn btn-success">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <br><br>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
