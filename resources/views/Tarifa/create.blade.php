@extends ('layouts.layout')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Tarifas</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!!Form::open(array('url'=>'tarifa','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="Role">Tipo de Vehiculo</label>
            <select name="tipo_vehiculo_id" id="tipo_vehiculo_id" class="form-control selectpicker" data-live-search="true" required>
                <option value="">Seleccione el tipo de vehiulo</option>
                @foreach($tipo_vehiculo as $tipov)
                <option value="{{$tipov->id}}">{{ $tipov->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="descripcion">Valor</label>
            <input type="text" name="valor" class="form-control" placeholder="Valor Hora...">
        </div>
        <div class="form-group">
            <label for="descripcion">Estado</label>
            <input type="text" name="estado" class="form-control" placeholder="1.Activo   0.Inactivo">
        </div>
        <div class="form-group">
            <button class="btn btn-info " type="submit"> <span class="glyphicon glyphicon-floppy-save">Guardar</button></span>
            <button class="btn btn-danger" type="reset">Cancelar</button>
            <a href="{{route('tarifa.index')}}" class="btn btn-success">Volver</a>


        </div>{!!Form::close()!!}
    </div>
</div>@endsection