@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Crear Condiciones')

@section('content')
<form method="post" action="{{url('/condiciones/guardar')}}">
    {{ csrf_field()}}
    <div class="row">


        <div class="col-sm-2">
            <div class="form-group">
                <label>Condiciones</label>
                <input type="text" id="descripcion" class="form-control" name="descripcion" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

       <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Disponible</label>
                <select name="disponibilidad" id="disponibilidad" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="1">SI</option>
                    <option value="0">NO</option>
                </select>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">REGISTRAR</button>
                <a href="{{url('/condiciones')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>
    </div>
</form>
@endsection
