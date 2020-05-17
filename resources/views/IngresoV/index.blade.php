@extends('layouts.layout')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Vehiculos
            <a href="ingresoV/create">
                <button class="btn btn-success fa fa-car">Nuevo</button></a></h3>
             
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover ">
                <thead>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Vehiculo-Placa</th>
                    <th>Estado</th>
                    <th>Usuario</th>
                    <th>Opciones</th>

                </thead>
                @foreach ($ingreso as $ingreso)<tr>

                    <td>{{ $ingreso->Id_Ingreso}}</td>
                    <td>{{ $ingreso->Fecha_Ingreso}}</td>
                   
                    <td>{{ $ingreso->Vehiculo_Id_Vehiculo}}</td> 
                    <td>{{ $ingreso->Estado}}</td>
                    <td>{{ $ingreso->Users_Id}}</td>
                    <td>
                        <a href="{{URL::action('Ingreso_vehiculoController@edit',$ingreso->id)}}">

                            <button 
                            class="btn btn-success"> <span class="glyphicon glyphicon-refresh"></span>Editar</button></a>
                            <a href="" data-target="#modal-delete-{{$ingreso->id}}" data-toggle="modal">
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