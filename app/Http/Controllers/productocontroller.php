<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Productos.Producto.productoIndex');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Productos.Producto.productoCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'producto' => 'required|unique:productos',
        'categoria' => 'required'
      ]);

      $data = [
        'cod_producto' => $request->codigodeproducto,
        'producto' => $request->producto,
        'precio' =>$request->preciodeproducto,
        'existencia' =>$request->existencia,
        'categoria' =>$request->categoria,
        'CREADO_POR'=>Auth()->user()->id,
        'FECHA_CREACION' => $request->FECHA_CREACION,
        'MODIFICADO_POR'=>Auth()->user()->id,
        'FECHA_MODIFICACION' => $request->FECHA_MODIFICACION,
        'estado' =>$request->estado,

      ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
