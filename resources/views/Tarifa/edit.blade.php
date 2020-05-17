@extends('layouts.layout')
@section('contenido')
<div class="row">
   
        <div class="col-md-6 col-md-offset-2">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Error!</strong>Reviselos campos obligatorios.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        {{Form::Open(array('action'=>array('TarifaController@update',$tarifa->id),'method'=>'patch'))}}

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <div class="form-group">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">

                            <label for="nombre">Tipo de vehiculo</label>
                            <input type="text" name="id" class="form-control" placeholder="Placa..."
                            value="{{$tarifa->id}}">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Valor</label>
                            <input type="text" name="valor" class="form-control" placeholder="Valor"
                            value="{{$tarifa->valor}}">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Estado</label>
                            <input type="text" name="estado" class="form-control" placeholder="Documento..."
                            value="{{$tarifa->estado}}">
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">Guardar</button>
                            <button class="btn btn-danger" type="reset">Cancelar</button>
                            <a href="{{route('tarifa.index')}}" class="btn btn-success">Volver</a>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
 
            </div>{!!Form::close()!!}</div>
</div>@endsection