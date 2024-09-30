@extends('layouts.plantillabase')

@section('title','Inicio')


@section('content')
<div class="content" id="page-content-wrapper">
    <div class="container card">
        <div class="team">
            <h2 class="title text-center">CREAR USUARIO</h2>
            <form action="{{ route('tecnicos.save') }}" method="post">
                {{ csrf_field() }}
                <div class="rows">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>ROL</label>
                            <select class="form-control" name="rol" id="rol" required>
                                <option value="">Seleccione</option>
                                @foreach( $rols as $key => $value )
                                <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <br>

                <div class="rows">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>NOMBRE</label>
                            <input class="form-control" type="text" name="nombre" id="nombre" maxlength="30" required onkeyup="this.value = this.value.toUpperCase();">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>USUARIO</label>
                            <input class="form-control" type="text" name="username" id="username" maxlength="30" required onkeyup="this.value = this.value.toUpperCase();">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>CORREO</label>
                            <input class="form-control" type="email" name="email" id="email" maxlength="30" required>
                        </div>
                    </div>
                </div>

                <br>

                <div class="rows">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="password">CONTRASEÑA</label>
                            <input class="form-control" type="password" name="password" id="password" maxlength="30" required>
                        </div>
                    </div>
                </div>

                <br>

                <div class="rows">
                    <div class="col-sm-2">
                      <div class="form-group">
                            <input type="submit" value="GUARDAR" name="enviar" id="enviar" class="btn btn-outline-success">
                            {{-- <a href="{{ ('avv') }}" class="btn btn-danger">Regresar</a> --}}
                            {{-- <a href="{{url('solicitud')}}" class="btn btn-danger" icon="fas fa-lg fa-arrow-left"/>Regresar</a> --}}
                      </div>
                    </div>
                    <br>
                    <div class="col-sm-2">
                      <div class="form-group">
                            <a href="{{ route('tecnicos.index') }}" class="btn btn-outline-danger">REGRESAR</a>
                            {{-- <input type="button" value="REGRESAR" name="regresar" id="regresar" class="btn btn-success"> --}}
                      </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


