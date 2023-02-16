@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios</h1>
@stop




@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script> src= "https://code.jquery.com/jquery-3.5.1.js" </script>
    <script> src= "https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js" </script>
    <script> src= "https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js" </script>

    <script>
$(document).ready(function () {
    $('usuarios').DataTable();
});
    </script>

@stop
