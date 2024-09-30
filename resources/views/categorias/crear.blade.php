@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Crear Categorias')

@section('content')
<form method="post" action="{{url('/categorias/guardar')}}">
    {{ csrf_field()}}
    <div class="row">


        <div class="col-sm-4">
            <div class="form-group">
                <label>Categorias</label>
                <input type="text" id="descripcion" class="form-control" name="descripcion" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
    </div>
       <br>

        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">REGISTRAR</button>
                <a href="{{url('/categorias')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>

</form>
@endsection
