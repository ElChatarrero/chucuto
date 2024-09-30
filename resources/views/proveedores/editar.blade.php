@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Editar Proveedores')

@section('content')
<form method="post" action="{{url('/proveedores/'.$proveedores->id.'/actualizar')}}">
    {{ csrf_field()}}
    <div class="row">


        <div class="col-sm-2">
            <div class="form-group">
                <label>Descripcion</label>
                <input value="{{$proveedores->descripcion}}" type="text" id="descripcion" class="form-control" name="descripcion" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

       <br>



        <div class="col-sm-2">
            <div class="form-group">
                <label>RIF</label>
                <input value="{{$proveedores->rif}}" type="text" id="rif" class="form-control" name="rif" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
        <br>


        <div class="col-sm-2">
            <div class="form-group">
            <label>Tipo</label>
            <select name="tipoproveedor" id="tipoproveedor" class="form-control" maxlength="10" required>
                <option value="">Seleccione</option>
                if ($condiciones->tipo == 1)
                {
                    <option value="1">Nacional</option>
                }else{
                    <option value="0">Juridico</option>
                }
            </select>
            </div>
        </div>



        <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Otra descripcion</label>
                <input value="{{$proveedores->otradescripcion}}" type="text" id="otradescripcion" class="form-control" name="otradescripcion" maxlength="45" required>
            </div>
        </div>


    </div>

        <br>

        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">ACTUALIZAR</button>
                <a href="{{url('/condiciones')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>

</form>
@endsection
