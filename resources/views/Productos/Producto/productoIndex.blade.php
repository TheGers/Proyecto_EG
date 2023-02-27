@extends('adminlte::page')

@section('css')
<!-- <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet"> -->
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('title', 'Productos')


@section('content_header')
    <h1 class="text-center">Listado de Productos</h1>
    <hr class ="bg-dark border-1 border-top border-dark">

@stop

@section('content')

<!-- <a href="Productos.Producto.productoCreate" class="btn btn-primary">CREAR</a>  -->
<a href="{{ route('producto.create') }}"
   <span>Agregar</span> <i class = "fas fa-plus-square"></i>
</a>

<!-- <div style="text-align:right; margin:1px; padding: 20px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >
    <a href="..productoCreate.blade.php" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">INICIO</a>
 </div>
 -->


<div class="table-resposive-sm mt-5">
    <table id="tablaproductos" class="table table-striped table-bordered table-condensed table-hover">
        <thead class ="thead-dark">
            <tr>
                <th>#</th>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Existencia</th>
                <th scope="col">Categoría</th>
                <th scope="col">Creado por</th>
                <th scope="col">Fecha de creacion</th>
                <th scope="col">Modificado por</th>
                <th scope="col">Fecha modicifación</th>
                <th scope="col">Estado</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>Vailla 3/4</td>
                <td>195.00</td>
                <td>50</td>
                <td>Metales</td>
                <td>Seydi Lara</td>
                <td>2023-02-19 22:52:05</td>
                <td>Seydi Lara</td>
                <td>2023-02-19 22:52:05</td>
                <td>Activo</td>
                <td class="text-center">
                    {{-- Boton de Editar --}}
                    <form action="{{ route('producto.destroy',1) }}" method="POST">
                        <a href="{{ route('producto.edit',1) }}"
                            class="btn btn-warning btm-sm fa fa-edit">
                        </a>
                        <button type="submit"
                            class="btn btn-danger btm-sm fa fa-times-circle"
                            ></button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tablaproductos').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            },
            //dom: 'Blfrtip',
            dom: '<"pt-2 row" <"col-xl mt-2"l><"col-xl text-center"B><"col-xl text-right mt-2 buscar"f>> <"row"rti<"col"><p>>',
            buttons: [
                {
                    extend: 'pdf',
                    className: 'btn btn-danger glyphicon glyphicon-duplicate',

                },
                {
                    extend: 'print',
                    text: 'Imprimir',
                    className: 'btn btn-secondary glyphicon glyphicon-duplicate'
                },
                {
                    extend: 'excel',
                    className: 'btn btn-success glyphicon glyphicon-duplicate'
                }
            ]
        });
    });
</script>
</script>
@stop
