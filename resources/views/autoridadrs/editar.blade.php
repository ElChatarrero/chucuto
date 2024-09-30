@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Editar Autoridad Responsable')

@section('content')
<form method="post" action="{{url('/autoridadrs/'.$autoridadrs->id.'/actualizar')}}">
    {{ csrf_field()}}
    <div class="row">


        <div class="col-sm-2">
            <div class="form-group">
                <label>Organismo</label>
                <select name="organismo_id" id="organismo_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($organismos as $key => $value)
                <option value="{{$key}}" {{$autoridadrs->organismo_id == $key ? 'selected = selected' : ''}}>{{$value}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Cedula</label>
                <input value="{{$autoridadrs->cedula}}" type="text" id="cedula" minlength="7" maxlength="8" class="form-control" name="cedula" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required/>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Nombre</label>
                <input value="{{$autoridadrs->nombre}}" type="text" id="nombre" maxlength="30" class="form-control" name="nombre" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Apellido</label>
                <input value="{{$autoridadrs->apellido}}" type="text" id="apellido" maxlength="30" class="form-control" name="apellido" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Telefono</label>
                <input value="{{$autoridadrs->telefono}}" type="text" id="telefono" class="form-control" name="telefono" minlength="15" placeholder="(0000) 000-0000" onkeypress="$(this).mask('(0000) 000-0000')" title="SOLO SE PERMITE NUMEROS, 11 DIGITOS" required>
            </div>
        </div>


        <div class="col-sm-2">
            <div class="form-group">
                <label>Cargo</label>
                <select name="cargo_id" id="cargo_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($cargos as $key => $value)
                <option value="{{$key}}" {{$autoridadrs->cargo_id == $key ? 'selected = selected' : ''}}>{{$value}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                 <label>Correo Electronico</label>
                <input value="{{$autoridadrs->correoelectronico}}" type="email" id="correoelectronico" maxlength="30" class="form-control" name="correoelectronico" required>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>N° de Gaceta</label>
                <input value="{{$autoridadrs->numerogaceta}}" type="text" id="numerogaceta" maxlength="8" class="form-control" name="numerogaceta" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Fecha Gaceta</label>
                <input value="{{$autoridadrs->fechagaceta}}" type="date" id="fechagaceta" class="form-control" name="fechagaceta" required>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Fecha Resolución</label>
                <input value="{{$autoridadrs->fecharesolucion}}" type="date" id="fecharesolucion" class="form-control" name="fecharesolucion" required>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Fecha Fin</label>
                <input value="{{$autoridadrs->fecha_fin}}" type="date" id="fecha_fin" class="form-control" name="fecha_fin" required>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Número de Resolución</label>
                <input value="{{$autoridadrs->numeroresolucion}}" type="text" id="numeroresolucion" maxlength="30" class="form-control" name="numeroresolucion" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-2">
                <div class="form-group">
                     <label>Tipo de Responsable</label>
                    <select name="tipo" id="tipo" class="form-control" required>
                        <option value="">Seleccione</option>
                        if ($autoridadrs->tipo == 1)
                        {
                            <option value="1" selected = selected>Maxima Autoridad</option>
                        }
                        else{
                            <option value="0" selected = selected>Responsable Patrimonial </option>
                        }

                    </select>
                </div>
    </div>
</div>


        <br>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">ACTUALIZAR</button>
                <a href="{{url('/autoridadrs')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>

</form>
@endsection
