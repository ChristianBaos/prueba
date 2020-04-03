@extends ('layouts.layout')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo Vehiculo</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!!Form::open(array('url'=>'vehiculo','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="nombre">Placa</label>
            <input type="text" name="placa" class="form-control" placeholder="Placa...">
        </div>
        <div class="form-group">
            <label for="descripcion">Tipo de Vehiculo</label>
            <input type="radio"name="tipo" class="form-check-input" value="Carro" placeholder="Tipo..."> Carro
            <input type="radio"name="tipo" class="form-check-input" value="Moto" placeholder="Tipo..."> Moto
        </div>
        <div class="form-group">
            <label for="descripcion">Modelo</label>
                <input type="text"name="modelo"class="form-control"placeholder="Modelo...">
    </div>
    <div class="form-group">
     <button class="btn btn-info "type="submit"> <span class="glyphicon glyphicon-floppy-save">Guardar</button></span>
            <button class="btn btn-danger"type="reset">Cancelar</button>
            <a href="{{route('vehiculo.index')}}" class="btn btn-success">Volver</a>
            
            
</div>{!!Form::close()!!}</div>
</div>@endsection