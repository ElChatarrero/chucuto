@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Crear Proveedores')

@section('content')
<form method="post" action="{{url('/proveedores/guardar')}}">
    {{ csrf_field()}}
    <div class="row">


        <div class="col-sm-2">
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" id="descripcion" class="form-control" name="descripcion" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

       <br>



        <div class="col-sm-2">
            <div class="form-group">
                <label>RIF</label>
                <input type="text" id="rif" class="form-control" name="rif" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
        <br>


        <div class="col-sm-2">
            <div class="form-group" >
            <label>Tipo</label>
            <select name="tipoproveedor" id="tipoproveedor" class="form-control" maxlength="10" required>
                <option value="">Seleccione</option>
                <option value="1">Nacional</option>
                <option value="0">Juridico</option>
            </select>
            </div>
        </div>



        <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Otra descripcion</label>
                <input type="text" id="otradescripcion" class="form-control" name="otradescripcion" maxlength="45" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>


    </div>

        <br>

        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">REGISTRAR</button>
                <a href="{{url('/condiciones')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>

</form>
@endsection
