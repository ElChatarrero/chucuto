@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Registro de Bienes Tecnologicos')


@section('content')
<form method="post" action="{{url('/bienes/'.$bienes->id.'/actualizar')}}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label>Categorias</label>
                <select name="categoria_id" id="categoria_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($categorias as $valor)
                    <option value="{{$valor->id}}" {{$bienes->categoria_id == $valor->id ? 'selected = "selected"' : ''}}>{{$valor->descripcion}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Marca</label>
                <select name="marca_id" id="marca_id" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($marcas as $value)
                        <option value="{{$value->id}}" {{$bienes->marca_id == $value->id ? 'selected = "selected"' : ''}}>{{$value->denominacion}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Modelo</label>
                <select name="modelo_id" id="modelo_id" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($modelos as $valor)
                        <option value="{{$valor->id}}" {{$bienes->modelos_id == $valor->id ? 'selected = "selected"' : ''}}>{{$valor->denominacion}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group" >
                <label>Nro. Bien</label>
                <input type="text" id="N_bien" class="form-control" name="N_bien" minlength="12" placeholder="0 0000000 00" onkeypress="$(this).mask('0 0000000 00')" title="SOLO SE PERMITE NUMEROS, 10 DIGITOS" value="{{$bienes->N_bien}}" maxlength="12" required>
            </div>
        </div>

         <div class="col-sm-3">
            <div class="form-group">
                <label>Condiciones</label>
                <select name="condiciones" id="condiciones" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($condiciones as $key => $value)
                        <option value="{{$key}}" {{$bienes->condiciones_id == $key ? 'selected = "selected"' : ''}}>{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div> <br><br><br><br>
        <div class="row">
            <div class="col-sm-12">
                <label>Nombre del Bien</label>
                <input type="text" id="nombre" name="nombre" maxlength="30" value="{{$bienes->nombre}}" class="form-control" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div><br>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Observacion</label>
                <input type="text" id="observacion" class="form-control" value="{{$bienes->observacion}}" required name="observacion"  onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">ACTUALIZAR</button>
                <a href="{{url('/bienes')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>
    </div>
</form>
@endsection
