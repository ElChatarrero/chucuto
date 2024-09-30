@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Editar Modelos')

@section('content')
<form method="post" action="{{url('/modelos/'.$modelos->id.'/actualizar')}}">
    {{ csrf_field()}}
    <div class="row">

    <div class="col-sm-7">
            <div class="form-group">
                <label>Denominación</label>
                <input value="{{$modelos->denominacion}}" type="text" id="denominacion" class="form-control" name="denominacion" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Marca</label>
                <select name="marca_id" id="marca_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($marcas as $key => $value)
                <option value="{{$key}}" {{$modelos->marca_id == $key ? 'selected = selected' : ''}}>{{$value}}</option>
                @endforeach
                </select>
            </div>
        </div>
       <div class="col-sm-2">
            <div class="form-group">
                <label>Categorias</label>
                <select name="categorias_id" id="categorias_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($categorias as $key => $value)
                <option value="{{$key}}" {{$modelos->categorias_id == $key ? 'selected = selected' : ''}}>{{$value}}</option>
                @endforeach
                </select>
            </div>
        </div>


</div>
<br>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">ACTUALIZAR</button>
                <a href="{{url('/modelos')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>
    </div>
</form>
@endsection
