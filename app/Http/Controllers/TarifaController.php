<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarifa;
use App\Tipo_Vehiculo;
use Illuminate\Support\Facades\Redirect;
use DB;

class TarifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarifa = Tarifa::all();

        return view('Tarifa.index')->with('tarifa', $tarifa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_vehiculo = DB::table('tipo_vehiculos')
        ->select('tipo_vehiculos.nombre', 'tipo_vehiculos.id')
        ->get();

        return view('Tarifa.create')->with('tipo_vehiculo', $tipo_vehiculo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $tarifa = new Tarifa;
        $tarifa->tipo_vehiculo_id = $request->get('tipo_vehiculo_id');
        $tarifa->valor = $request->get('valor');
        $tarifa->estado = $request->get('estado');
        $tarifa->save();
        return Redirect::to('tarifa');
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
    /*
    public function edit($id)
    {
        $tipo_vehiculo=Tipo_Vehiculo::findOrFail($id);
        return view("Tipo_Vehiculo.edit",["tipo_vehiculo"=>$tipo_vehiculo]);
    }*/

    public function edit($id)
    {
        $tarifa=Tipo_Vehiculo::find($id);
        return view('tarifa.edit',compact('tarifa'));//
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
