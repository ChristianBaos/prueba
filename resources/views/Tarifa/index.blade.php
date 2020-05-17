@extends('layouts.layout')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Tarifas
            <a href="/tarifa/create">
                <button class="btn btn-success fa fa-money">Tarifas</button></a></h3>
             
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover ">
                <thead>
                    <th>Id</th>
                    <th>Tipo de vehiculo</th>
                    <th>Descripcion</th>
                    <th>Valor</th>
                    <th>Estado</th>
                    <th>Opciones</th>

                </thead>
                @foreach ($tarifa as $tarifa)<tr>
                    <td>{{ $tarifa->id}}</td>
                    <td>{{ $tarifa->tipo_vehiculo->nombre}}</td>
                    <td>{{ $tarifa->tipo_vehiculo->descripcion}}</td>
                    <td>{{ $tarifa->valor}}</td>
                    <td>{{ $tarifa->estado}}</td>
                    <td>
                        <a href="{{URL::action('TarifaController@edit',$tarifa->id)}}">
                            <button class="btn btn-success"> <span class="glyphicon glyphicon-refresh"></span>Editar Tarifas</button></a>
                            <a href="" data-target="#modal-delete-{{$tarifa->id}}" data-toggle="modal">
                            <button class="btn btn-danger"> <span class="glyphicon glyphicon-trash"> </span>Retirar Vehiculo
                        </button></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        
    </div>
</div>
@endsection



