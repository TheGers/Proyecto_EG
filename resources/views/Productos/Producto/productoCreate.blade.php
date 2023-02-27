@extends('adminlte::page')

@section('css')
<!-- <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet"> -->
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
@stop


@section('title', 'producto')

@section('content_header')


@stop

@section('content')

<div class="Formulario"  style="width:800px; margin:1px auto; padding:100px;  background-color: rgb(211, 211, 211);"  >
        <div class="row">
            <div class="col-12">

                <h3 style="text-align:center">
                    Agregar Producto
                </h3>
                <hr class ="bg-dark border-1 border-top border-dark">
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
                    <input type="text" id="ModificadoPor" class="form-control" placeholder="Ingrese el nombre del modificador">
                    <br>
                    <label for="">FECHA_MODIFICACION</label>
                    <input type="date" id="FechaModificacion" class="form-control" placeholder="Ingrese la fecha de modificación">
                    <br>
                    <label for="">Estado</label>
                    <input type="text" id="estado" class="form-control" placeholder="Ingrese el estado">
                    <hr class ="bg-dark border-1 border-top border-dark">
                    <div id="btnAgregarProducto" style="text-align:right">
                        <input  type="submit" id="btnAgregar" onclick=" " value="Agregar" class="btn btn-primary">
                        <input  type="submit" id="btnAgregar" onclick=" " value="Cancelar" class="btn btn-danger">
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

    </script>
@stop
