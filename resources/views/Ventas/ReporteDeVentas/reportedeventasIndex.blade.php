@extends('adminlte::page')



@section('css')
<!-- <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet"> -->
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('title', 'Reporte_de_ventas')

@section('content_header')
    <h3> Reporte de ventas</h3>
    <hr class ="bg-dark border-1 border-top border-dark">
    
@stop

@section('content')

<!-- <a href="{{route('reportedeventas.create')}}"> 
   <span>Crear Nuevo</span> <i class = "fas fa-plus-square"></i>
</a> -->


<div class="table-resposive-sm mt-5"> 
    <table id="tablareporteventas" class="table table-striped table-bordered table-condensed table-hover">
        <thead class ="thead-dark">
            <tr>
               <th>#</th>
               <th>Codigo de la venta</th>
               <th>Detalle venta</th>
               <th>Sub Total</th>
               <th>Descuento</th>
               <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>0001</td>
                <td>Primera venta</td>
                <td>500</td>
                <td>0</td>
                <td>500</td>
            </tr>
        </tbody>
    </table>


</div>


@stop

@section('css')

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
        $('#tablareporteventas').DataTable({
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