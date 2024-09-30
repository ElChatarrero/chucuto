@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Emitir Prestamo')


@section('content')
<h3><strong>Datos del Solicitante</strong></h3>
<form method="post" action="{{url('/prestamos/guardar')}}">
    {{ csrf_field()}}

    <div class="rows">
        <div class="col-sm-3">
            <div class="input-group mb-3">
                <input type="number" id="cedula" class="form-control" required name="cedula" minlength="7" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"aria-describedby="button-addon2">
                <input type="hidden" id="solicitante_id" name="solicitante_id">
                <button class="btn btn-outline-danger" type="button" id="buscar" name="buscar">Buscar</button>
            </div>
        </div>
              <div class="col-sm-12">
                <div class="input-group">
                    <span class="input-group-text bg-danger text-white">Nombre y Apellido</span>
                    <input type="text" aria-label="nombre" id="nombre" name="nombre" value="" class="form-control">
                    <input type="text" aria-label="apellido" id="apellido" name="apellido" value="" class="form-control">
                </div>
              </div>
            </div><br>
    <div class="row">

        <div class="col-sm-3">
            <div class="form-group">
                <label>Fecha Solicitud</label>
                <input type="date" id="fecha_solicitud" class="form-control" name="fecha_solicitud" required>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Fecha Salida</label>
                <input type="date" id="fecha_salida" class="form-control" name="fecha_salida" required onblur="myFunction2()">
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Fecha Devolucion Temporal</label>
                <input type="date" id="fecha_devolucion" class="form-control" name="fecha_devolucion"  onblur="myFunction()">
            </div>
        </div>



        <div class="col-sm-3">
            <div class="form-group">
                <label>Ubicacion</label>
                <input type="text" id="ubicacion_prestamo" class="form-control" name="ubicacion_prestamo" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <br><br><br>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Motivo</label>
                <input type="text" id="motivo" class="form-control" name="motivo" maxlength="45" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
        <br><br><br>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Observacion</label>
                <input type="text" id="observacion" class="form-control" name="observacion" onKeyUp="this.value=this.value.toUpperCase()"  >
            </div>
        </div>
    </div>
    <div class="col-sm-1">
            <div class="form-group">
                <input type="hidden" id="users_id" class="form-control" name="users_id" value="{{auth()->user()->id}}" required>
            </div>
        </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">REGISTRAR</button>
                <a href="{{url('/solicitantes')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>
    </div>
</form>
@endsection
