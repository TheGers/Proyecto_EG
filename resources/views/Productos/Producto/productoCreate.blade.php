@extends('adminlte::page')

@section('title', 'Crear Producto')


@section('content_header')
    {{-- TITULO DE PRODUCTOS --}}
    <h1 class="text-center">Productos</h1>
    <hr class="bg-dark border-1 border-top border-dark">
@stop

@section('content')
    <form action="{{ route('producto.store') }}" method="POST">
        @csrf

        {{-- DISENO DEL FORMULARIO --}}
        <div class="Formulario" style="width:800px; margin:1px auto; padding:100px;  background-color: rgb(211, 211, 211);">
            <div class="row">
                <div class="col-12">

                    {{-- TITULO DE AGREGAR PRODUCTO --}}
                    <h3 style="text-align:center">
                        Agregar Producto
                    </h3>

                    {{-- BORDE --}}
                    <hr class="bg-dark border-1 border-top border-dark">

                    {{-- Orden de la tabla --}}
                </div>
                <div class="col-12" style="font-weight:bold">
                    <form class="producto">

                        <div class="row">

                             {{-- LINEA DE CODIGO DE PRODUCTO --}}
                             <div class="col-sm-6 col-xs-12">
                                <div class="form-group has-primary">
                                    <label form="codigodeproducto">Codigo de Producto:</label>
                                    <input type="text" id="cod_producto" class="form-control border-secondary"
                                        placeholder="Ingrese el codigo de producto..." name="codigodeproducto"
                                        :value="old('codigodeproducto')" autofocus>
                                </div>
                                {{-- PARA LOS ERRORES --}}
                                @if ($errors->has('codigodeproducto'))
                                    <div id="codigodeproducto-error" class="error text-danger pl-3" for="codigodeproducto"
                                        style="display: block;">
                                        <strong>{{ $errors->first('codigodeproducto') }}</strong>
                                    </div>
                                @endif
                            </div>

                            {{-- LINEA DE INGRESAR PRODUCTO --}}
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group has-primary">
                                    <label form="producto">Producto:</label>
                                    <input type="text" id="producto" class="form-control border-secondary"
                                        placeholder="Ingrese el nombre del producto..." name="producto"
                                        :value="old('producto')" autofocus>
                                </div>
                                {{-- PARA LOS ERRORES --}}
                                @if ($errors->has('producto'))
                                    <div id="producto-error" class="error text-danger pl-3" for="producto"
                                        style="display: block;">
                                        <strong>{{ $errors->first('producto') }}</strong>
                                    </div>
                                @endif
                            </div>

                            {{-- LINEA DE PRECIO PRODUCTO --}}
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group has-primary">
                                    <label form="preciodeproducto">Precio de Producto:</label>
                                    <input type="text" id="precio" class="form-control border-secondary"
                                        placeholder="Ingrese el precio del producto..." name="preciodeproducto"
                                        :value="old('preciodeproducto')" autofocus>
                                </div>
                                {{-- PARA LOS ERRORES --}}
                                @if ($errors->has('preciodeproducto'))
                                    <div id="preciodeproducto-error" class="error text-danger pl-3" for="preciodeproducto"
                                        style="display: block;">
                                        <strong>{{ $errors->first('preciodeproducto') }}</strong>
                                    </div>
                                @endif
                            </div>

                            {{-- LINEA DE EXISTENCIA --}}
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group has-primary">
                                    <label form="existencia">Existencias:</label>
                                    <input type="text" id="existencia" class="form-control border-secondary"
                                        placeholder="Ingrese las existencias..." name="existencia"
                                        :value="old('existencia')" autofocus>
                                </div>
                                {{-- PARA LOS ERRORES --}}
                                @if ($errors->has('existencia'))
                                    <div id="existencia-error" class="error text-danger pl-3" for="existencia"
                                        style="display: block;">
                                        <strong>{{ $errors->first('existencia') }}</strong>
                                    </div>
                                @endif
                            </div>

                             {{-- LINEA DE CATEGORIAS --}}
                             <div class="col-sm-6 col-xs-12">
                                <div class="form-group has-primary">
                                    <label form="categoria">Categorias:</label>
                                    <input type="text" id="categoria" class="form-control border-secondary"
                                        placeholder="Ingrese las categorias..." name="categoria"
                                        :value="old('categoria')" autofocus>
                                </div>
                                {{-- PARA LOS ERRORES --}}
                                @if ($errors->has('categoria'))
                                    <div id="categoria-error" class="error text-danger pl-3" for="categoria"
                                        style="display: block;">
                                        <strong>{{ $errors->first('categoria') }}</strong>
                                    </div>
                                @endif
                            </div>

                            {{-- LINEA DE CREADO POR --}}
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group has-primary">
                                    <label form="CREADO_POR">Creado Por:</label>
                                    <input type="text" id="creadopor" class="form-control border-secondary"
                                        placeholder="..." name="creadopor"
                                        :value="old('creadopor')" autofocus>
                                </div>
                                {{-- PARA LOS ERRORES --}}
                                @if ($errors->has('creadopor'))
                                    <div id="creadopor-error" class="error text-danger pl-3" for="creadopor"
                                        style="display: block;">
                                        <strong>{{ $errors->first('creadopor') }}</strong>
                                    </div>
                                @endif
                            </div>

                             {{-- LINEA DE FECHA DE CREACION --}}
                             <div class="col-sm-6 col-xs-12">
                                <div class="form-group has-primary">
                                    <label form="FECHA_CREACION">Fecha de Creacion:</label>
                                    <input type="date" id="FECHA_CREACION" class="form-control border-secondary"
                                        placeholder="..." name="FECHA_CREACION"
                                        :value="old('FECHA_CREACION')" autofocus>
                                </div>
                                {{-- PARA LOS ERRORES --}}
                                @if ($errors->has('FECHA_CREACION'))
                                    <div id="FECHA_CREACION-error" class="error text-danger pl-3" for="FECHA_CREACION"
                                        style="display: block;">
                                        <strong>{{ $errors->first('FECHA_CREACION') }}</strong>
                                    </div>
                                @endif
                            </div>

                             {{-- LINEA DE MODIFICADO POR --}}
                             <div class="col-sm-6 col-xs-12">
                                <div class="form-group has-primary">
                                    <label form="MODIFICADO_POR">Modificado por:</label>
                                    <input type="text" id="MODIFICADO_POR" class="form-control border-secondary"
                                        placeholder="..." name="MODIFICADO_POR"
                                        :value="old('MODIFICADO_POR')" autofocus>
                                </div>
                                {{-- PARA LOS ERRORES --}}
                                @if ($errors->has('MODIFICADO_POR'))
                                    <div id="MODIFICADO_POR-error" class="error text-danger pl-3" for="MODIFICADO_POR"
                                        style="display: block;">
                                        <strong>{{ $errors->first('MODIFICADO_POR') }}</strong>
                                    </div>
                                @endif
                            </div>

                            {{-- LINEA DE FECHA DE CREACION --}}
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group has-primary">
                                    <label form="FECHA_MODIFICACION">Fecha de Modificacion:</label>
                                    <input type="date" id="FECHA_MODIFICACION" class="form-control border-secondary"
                                        placeholder="..." name="FECHA_MODIFICACION"
                                        :value="old('FECHA_MODIFICACION')" autofocus>
                                </div>
                                {{-- PARA LOS ERRORES --}}
                                @if ($errors->has('FECHA_MODIFICACION'))
                                    <div id="FECHA_MODIFICACION-error" class="error text-danger pl-3" for="FECHA_MODIFICACION"
                                        style="display: block;">
                                        <strong>{{ $errors->first('FECHA_MODIFICACION') }}</strong>
                                    </div>
                                @endif
                            </div>

                             {{-- LINEA DE ESTADO --}}
                             <div class="col-sm-6 col-xs-12">
                                <div class="form-group has-primary">
                                    <label form="estado">Estado:</label>
                                    <input type="text" id="estado" class="form-control border-secondary"
                                        placeholder="..." name="estado"
                                        :value="old('estado')" autofocus>
                                </div>
                                {{-- PARA LOS ERRORES --}}
                                @if ($errors->has('estado'))
                                    <div id="estado-error" class="error text-danger pl-3" for="estado"
                                        style="display: block;">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </div>
                                @endif
                            </div>


                        </div>
                        {{-- BORDE QUE SEPARA LAS CASILLAS CON LOS BOTONES --}}
                        <hr class="bg-dark border-1 border-top border-dark">

                        {{-- BOTONES DE CANCELAR Y AGREGAR --}}
                        <div class="row">
                            <div class="col-sm-6" col-xs-12 mb-2">
                                <a href="{{ route('producto.index') }}" class="btn btn-danger w-100">Cancelar <i
                                        class="fa fa-times-circle ml-2"></i></a>
                            </div>
                            <div class="col-sm-6" col-xs-12 mb-2">
                                <button type="submit" class="btn btn-success w-100">
                                    Guardar <i class="fa fa-check-circle ml-2"></i>
                                </button>
                            </div>
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
        <script></script>
    @stop
