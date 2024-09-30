@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Registro de Bienes Tecnologicos')


@section('content')
<form method="post" action="{{url('/bienes/guardar')}}">
    {{ csrf_field()}}
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>Categorias</label>
                <select name="categoriaId" id="categoriaId" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($categorias as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Marca</label>
                <select name="marcaId" id="marcaId" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($marcas as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Modelo</label>
                <select name="modelo_id" id="modelo_id" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($modelos as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Nro. Bien</label>
                <input type="text" id="N_bien" class="form-control" name="N_bien" minlength="12" placeholder="0 0000000 00" onkeypress="$(this).mask('0 0000000 00')" title="SOLO SE PERMITE NUMEROS, 10 DIGITOS" maxlength="12" required>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Condiciones</label>
                <select name="condiciones" id="condiciones" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($condiciones as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
                </select>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <label>Nombre del Bien</label>
            <input type="text" id="nombre" name="nombre" maxlength="30" class="form-control" required onKeyUp="this.value=this.value.toUpperCase()">
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Observacion</label>
                <input type="text" id="observacion" class="form-control" name="observacion" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">REGISTRAR</button>
            </div>
        </div>
    </div>
</form>
@endsection


