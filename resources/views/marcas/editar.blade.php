@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Editar Marcas')

@section('content')
<form method="post" action="{{url('/marcas/'.$marcas->id.'/actualizar')}}">
    {{ csrf_field()}}
    <div class="row">


        <div class="col-sm-2">
            <div class="form-group">
                <label>Nombre del Fabricante</label>
                <input value="{{$marcas->nombredelfabricante}}"  type="text" id="nombredelfabricante" class="form-control" name="nombredelfabricante" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

       <br>

       <div class="col-sm-2">
            <div class="form-group">
                <label>Denominacion Comercial</label>
                <input value="{{$marcas->denominacion}}" type="text" id="denominacion" class="form-control" name="denominacion" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>


    </div>

    <br>
        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">ACTUALIZAR</button>
                <a href="{{url('/marcas')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>

</form>
@endsection
