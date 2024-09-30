@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Crear Autoridad Responsable')

@section('content')
<form method="post" action="{{url('/autoridadrs/guardar')}}">
    {{ csrf_field()}}
    <div class="row">


        <div class="col-sm-2">
            <div class="form-group">
                <label>Organismo</label>
                <select name="organismo_id" id="organismo_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($organismos as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Cedula</label>
                <input type="number" id="cedula" class="form-control" required name="cedula" minlength="7" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" id="nombre" class="form-control" name="nombre" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Apellido</label>
                <input type="text" id="apellido" class="form-control" name="apellido" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Telefono</label>
                <input type="text" id="telefono" class="form-control" name="telefono" maxlength="15" placeholder="(0000) 000-0000" onkeypress="$(this).mask('(0000) 000-0000')" title="SOLO SE PERMITE NUMEROS, 11 DIGITOS" required>
            </div>
        </div>


        <div class="col-sm-2">
            <div class="form-group">
                <label>Cargo</label>
                <select name="cargo_id" id="cargo_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($cargos as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Correo Electronico</label>
                <input type="email" id="correoelectronico" class="form-control" maxlength="30" name="correoelectronico" required>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>N° de Gaceta</label>
                <input type="text" id="numerogaceta" class="form-control" name="numerogaceta" maxlength="8" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Fecha Gaceta</label>
                <input type="date" id="fechagaceta" class="form-control" name="fechagaceta" required>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Fecha Resolución</label>
                <input type="date" id="fecharesolucion" class="form-control" name="fecharesolucion" required>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Fecha Fin</label>
                <input type="date" id="fecha_fin" class="form-control" name="fecha_fin" required>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Número de Resolución</label>
                <input type="text" id="numeroresolucion" class="form-control" maxlength="8" name="numeroresolucion" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-4">
                <div class="form-group">
                     <label>Tipo de Responsable</label>
                    <select name="tipo" id="tipo" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="1">Maxima Autoridad</option>
                        <option value="0">Responsable Patrimonial </option>
                    </select>
                </div>
    </div>
</div>


        <br>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">REGISTRAR</button>
                <a href="{{url('/autoridadrs')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>

</form>
@endsection
