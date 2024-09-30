@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Editar Categorias')

@section('content')
<form method="post" action="{{url('/categorias/'.$categorias->id.'/actualizar')}}">
    {{ csrf_field()}}
    <div class="row">


        <div class="col-sm-4">
            <div class="form-group">
                <label>Categorias</label>
                <input  value="{{$categorias->descripcion}}" type="text" id="descripcion" maxlength="30" class="form-control" name="descripcion" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
    </div>
       <br>

        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">ACTUALIZAR</button>
                <a href="{{url('/categorias')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>

</form>
@endsection
