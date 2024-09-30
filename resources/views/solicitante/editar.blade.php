@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Editar Solicitante')

@section('content')
<form method="post" action="{{url('/solicitantes/'.$solicitante->id.'/actualizar')}}">
    {{ csrf_field()}}
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label>Nombre</label>
                <input value="{{$solicitante->nombres}}" type="text" id="nombres" class="form-control" name="nombres" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>


        <div class="col-sm-2">
            <div class="form-group">
                <label>Apellidos</label>
                <input value="{{$solicitante->apellidos}}" type="text" id="apellidos" class="form-control" name="apellidos" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Cedula</label>
                <input type="number" id="cedula" class="form-control" name="cedula" minlength="7" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required/>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Dependencia</label>
                <input value="{{$solicitante->dependencia}}" type="text" id="dependencia" class="form-control" name="dependencia" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Extension</label>
                <input type="text" id="extension" class="form-control" name="extension" minlength="15" placeholder="(0000) 000-0000" onkeypress="$(this).mask('(0000) 000-0000')" title="SOLO SE PERMITE NUMEROS, 11 DIGITOS" maxlength="15" required>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Correo Electronico</label>
                <input value="{{$solicitante->correo_electronico}}" type="email" id="correo_electronico" class="form-control" name="correo_electronico" maxlength="30" required>
            </div>
        </div>
    </div><br>
    <div class="row">
         <div class="col-sm-3">
            <div class="form-group">
                <label>Cargo</label>
                <select name="cargo_id" id="cargo_id" class="form-control" required onKeyUp="this.value=this.value.toUpperCase()">
                <option value="">Seleccione</option>
                @foreach($cargo as $key => $value)
                <option value="{{$key}}" {{$solicitante->cargo_id == $key ? 'selected = selected' : ''}}>{{$value}}</option>
                @endforeach
                </select>
            </div>
         </div>
    </div>


    <br>


    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">ACTUALIZAR</button>
                <a href="{{url('/solicitantes')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>
    </div>
</form>
@endsection


