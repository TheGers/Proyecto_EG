@extends('adminlte::page')

@section('title', 'Facturacion')

@section('content_header')
    <div class="content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-md-9">

                    <div class="row">
                        {{-- INPUT PARA INGRESO DE PRODUCTO --}}
                        <div class="col-md-12 mb-3">
                            <div class="form-group mb-2">
                                <label class="col-form-label" for="iptCodigoVenta">
                                    <i class="fas fa-barcode fs-6"></i>
                                    <span class="smail">Productos</span>
                                </label>

                                <input type="text" class="form-control form-control-sm" id="iptCodigoVenta"
                                    placeholder="Ingrese el codigo o nombre del producto">

                            </div>

                        </div>
                        {{-- ETIQUETA PARA VER LA SUMA DE LA VENTA --}}
                        <div class="col-md-6 mb=3">
                            <h3>Total de Venta: L./ <span id="totalventa">0.00</span></h3>
                        </div>

                        {{-- BOTONES PARA VACIAR LISTADO Y COMPLETAR VENTA --}}
                        <div class="col-md-6 text-right">
                            <button class="btn btn-primary" id="btnIniciarVenta">
                                <i class="fas fa-shopping-cart"></i> Realizar Venta
                            </button>
                            <button class="btn btn-danger" id="btnVaciarListado">
                                <i class="far fa-trash-alt"></i> Vaciar Listado
                            </button>
                        </div>

                        {{-- LISTADO DE PRODUCTOS QUE SE AGREGAN A LA COMPRA --}}
                        <div class="col-md-12">
                            <table id="lstProductosVenta" class="display nowrap table-striped w-100 shadow">
                                <thead class="bg-info text-left fs-6">
                                    <tr>
                                        <th>Item</th>
                                        <th>Codigo</th>
                                        <th>Id Categoria</th>
                                        <th>Categoria</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Total</th>
                                        <th class="text-center">Opciones</th>
                                        <th>Aplica Peso</th>
                                    </tr>
                                </thead>
                                <tbody class="small text-left fs-6">
                                </tbody>
                            </table>
                            <!-- / table -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow">
                        <h5 class="card-header py-1 bg-primary text-white text-center">
                            Total venta: L./ <span id="totalVentaRegistrar">0.00</span>
                        </h5>

                        <div class="card-body p-2">
                            <!-- SELECCIONAR TIPO DE DOCUMENTO -->
                            <div class="form-group mb-2">

                                <label class="col-form-label" for="selCategoriaReg">
                                    <i class="fas fa-file-alt fs-6"></i>
                                    <span class="small">Documento</span><span class="text-danger"></span>
                                </label>

                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selDocumentoVenta">
                                    <option value="0">Seleccione Documento </option>
                                    <option value="1" selected="true">Factura</option>
                                    <option value="0">Boleta </option>
                                    <option value="0">Ticket </option>
                                </select>

                                <span id="validate_categoria" class="text-danger small fst-itallic" style="display:none">
                                    Debe seleccionar un documento
                                </span>
                            </div>
                            <!-- SELECCIONAR TIPO DE DOCUMENTO -->
                            <div class="form-group mb-2">
                                <label class="col-form-label" for="selCategoriareg">
                                    <i class="fas fa-money-bill-alt fs-6"></i>
                                    <span class="small">Tipo de Pago</span><span class="text-danger"></span>
                                </label>

                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selTipoPago">
                                    <option value="0">Seleccione Tipo de Pago </option>
                                    <option value="1" selected="true">Efectivo</option>
                                    <option value="0">Tarjeta </option>
                                </select>

                                <span id="validate_categoria" class="text-danger small fst-itallic" style="display:none">
                                    Debe seleccionar tipo de pago
                                </span>
                            </div>

                            <!-- SERIE Y NUMERO DE FACTURA -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="iptNroSerie">Serie</label>
                                        <input type="text" min="0" name="iptEfectivo" id="iptNroSerie"
                                            class="form-control form-control-sm" placeholder="Nro Serie" disabled>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="iptNroVenta">Nro Venta</label>
                                        <input type="text" min="0" name="iptEfectivo" id="iptNroVenta"
                                            class="form-control form-control-sm" placeholder="Nro Venta" disabled>
                                    </div>
                                </div>
                            </div>

                            <!-- INPUT DE EFECTIVO ENTREGADO -->
                            <div class="form-group">
                                <label for="iptEfectivoRecibido">Efectivo Recibido</label>
                                <input type="number min="0" name="iptEfectivo id="iptEfectivoRecibido"
                                    class="form-control form-control-sm" placeholder="Cantidad de efectivo recibido">
                            </div>


                            <!-- INPUT CHECK DE EFECTIVO EXACTO -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="chkEfectivoExacto">
                                <label class="form-check-label" form="chkEfectivoExacto">
                                    Efectivo Exacto
                                </label>
                            </div>


                            <!-- MOSTRAR MONTO EFECTIVO Y VUELTO -->
                            <div class="row mt-2>" <div class="col-12">
                                <h6 class="text-start fw-bold">Monto Efectivo: L./ <span
                                        id="EfectivoEntregado">0.00</span></h6>
                            </div>

                            <div class="col-12">
                                <h6 class="text-start text-danger fw-bold">Cambio L./ <span id="Vuelto">0.00</span>
                                </h6>
                            </div>
                        </div>

                        <!-- MOSTRAR TOTALES -->
                        <div class="row">
                            <div class="col-md-7">
                                <span>SUBTOTAL</span>
                            </div>
                            <div class="col-md-5 text-right">
                                L./ <span class="" id="boleta_subtotal">0.00</span>
                            </div>

                            <div class="col-md-7">
                                <span>ISV</span>
                            </div>
                            <div class="col-md-5 text-right">
                                L./ <span class="" id="boleta_ISV">0.00</span>
                            </div>

                            <div class="col-md-7">
                                <span>TOTAL</span>
                            </div>
                            <div class="col-md-5 text-right">
                                L./ <span class="" id="boleta_total">0.00</span>
                            </div>
                        </div>

                    </div><!-- ./ CARD BOOY -->

                </div><!-- ./ CARD -->
            </div>
        </div>
    </div>

    <script>
        var table;
        $(document).ready(function() {

            // <!-- ./ INICIAR LA TABLA DE VENTAS -->
            table = $('#lstProductosVenta').DataTable({
                columnDefs: [{
                        targets: 0,
                        visible: false
                    },
                    {
                        targets: 3,
                        visible: false
                    },
                    {
                        targets: 2,
                        visible: false
                    },
                    {
                        targets: 6,
                        orderable: false
                    },
                    {
                        targets: 9,
                        visible: false
                    }
                ],
                "order": [
                    [0. 'desc']
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.20/118n/Spanish.json"
                }
            });
        })
    </script>

@stop

@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop

