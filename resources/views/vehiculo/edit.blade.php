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

        {{Form::Open(array('action'=>array('VehiculoController@update',$vehiculo->id),'method'=>'patch'))}}

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <div class="form-group">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">

                            <label for="nombre">Placa</label>
                            <input type="text" name="placa" class="form-control" placeholder="Placa..."
                            value="{{$vehiculo->placa}}">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Tipo</label>
                            <input type="text" name="tipo" class="form-control" placeholder="Tipo..."
                            value="{{$vehiculo->tipo}}">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Modelo</label>
                            <input type="text" name="modelo" class="form-control" placeholder="Documento..."
                            value="{{$vehiculo->modelo}}">
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">Guardar</button>
                            <button class="btn btn-danger" type="reset">Cancelar</button>
                            <a href="{{route('vehiculo.index')}}" class="btn btn-success">Volver</a>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
 
            </div>{!!Form::close()!!}</div>
</div>@endsection