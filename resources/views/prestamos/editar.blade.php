@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Emitir Prestamo')


@section('content')
<form method="post" action="{{url('/prestamos/'.$prestamos->id.'/actualizar')}}">
    {{ csrf_field()}}
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label>Solicitante</label>
                <select name="solicitantes_id" id="solicitantes_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($solicitante as $key => $value)
                <option value="{{$key}}"  {{$prestamos->solicitante_id == $key ? 'selected = selected' : ''}}>{{$value}}</option>
                @endforeach
                </select>
            </div>
        </div>


        <div class="col-sm-2">
            <div class="form-group">
                <label>Fecha Solicitud</label>
                <input value="{{$prestamos->fecha_solicitud}}" type="date" id="fecha_solicitud" class="form-control" name="fecha_solicitud" required>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Fecha Salida</label>
                <input value="{{$prestamos->fecha_salida}}" type="date" id="fecha_salida" class="form-control" name="fecha_salida" required>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Ubicacion Prestamo</label>
                <input value="{{$prestamos->ubicacion_prestamo}}" type="text" id="ubicacion_prestamo" class="form-control" name="ubicacion_prestamo" required>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Fecha Devolucion Temporal</label>
                <input value="{{$prestamos->fecha_devolucion}}" type="date" id="fecha_devolucion" class="form-control" name="fecha_devolucion">
            </div>
        </div>
        <br>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Motivo</label>
                <input value="{{$prestamos->motivo}}" type="text" id="motivo" class="form-control" name="motivo" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
        <br>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Observacion</label>
                <input value="{{$prestamos->observacion}}" type="text" id="observacion" class="form-control" name="observacion" onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>



        <div class="col-sm-2">
            <div class="form-group">
                <input value="{{$prestamos->estatus}}" type="checkbox" id="estatus" name="estatus" value="1" required>
                <label>Estatus</label>
            </div>
        </div>
    </div>


    <br>


    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">ACTUALIZAR</button>
                <a href="{{url('/prestamos')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>
    </div>
</form>
@endsection
