@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Editar Sedes')

@section('content')
<form method="post" action="{{url('/sedes/'.$sedes->id.'/actualizar')}}">
    {{ csrf_field()}}
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label>Organismo</label>
                <select name="organismo_id" id="organismo_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($organismos as $key => $value)
                <option value="{{$key}}" {{$sedes->organismo_id == $key ? 'selected = selected' : ''}}>{{$value}}</option>
                @endforeach
                </select>
            </div>
        </div>
       <div class="col-sm-2">
            <div class="form-group">
                <label>Tipo de Sedes</label>
                <select name="tiposede_id" id="tiposede_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($tiposede as $key => $value)
                <option value="{{$key}}"{{$sedes->tiposede_id == $key ? 'selected = selected' : ''}}>{{$value}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label>Descripcion</label>
                <input value="{{$sedes->descripcion}}" type="text" id="descripcion" class="form-control" name="descripcion" maxlength="45" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label>localizacion</label>
                <select name="localizacion" id="localizacion" class="form-control" required>
                    <option value="">Seleccione</option>
                    if ($sedes->localizacion == 1)
                    {
                    <option value="1">Nacional</option>
                    }else{
                    <option value="0">Internacional</option>}
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Pais</label>
                <input value="{{$sedes->pais_id}}" type="text" id="pais_id" class="form-control" name="pais_id" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>ESTADO:</label>
                <select class="form-control" name="estado_id" id="estado_id" required onKeyUp="this.value=this.value.toUpperCase()">
                    <option value="">Seleccione</option>
                    @foreach( $estados as $key => $value )
                    <option value="{{ $key }}" {{$sedes->estado_id == $key ? 'selected = selected' : ''}}>{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>MUNICIPIO:</label>
                <select class="form-control" name="municipio" id="municipio" required onKeyUp="this.value=this.value.toUpperCase()">
                    <option value="">Seleccione</option>
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>PARROQUIA:</label>
                <select class="form-control" name="parroquia" id="parroquia" required onKeyUp="this.value=this.value.toUpperCase()">
                <option value="">Seleccione</option>
                </select>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label>Ciudad</label>
                <input value="{{$sedes->ciudad}}" type="text" id="ciudad" class="form-control" name="ciudad" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Otra Ciudad</label>
                <input value="{{$sedes->otraciudad}}" type="text" id="otraciudad" class="form-control" name="otraciudad" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>urbanizacion</label>
                <input value="{{$sedes->urbanizacion}}" type="text" id="urbanizacion" class="form-control" name="urbanizacion" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Calle / Avenida</label>
                <input value="{{$sedes->calleavenida}}" type="text" id="calleavenida" class="form-control" name="calleavenida" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Sector</label>
                <input value="{{$sedes->sector_id}}" type="text" id="sector_id" class="form-control" name="sector_id" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Otra Sede</label>
                <input value="{{$sedes->otrasede}}" type="text" id="otrasede" class="form-control" name="otrasede" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
    </div><br>

    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label>Estatus de la Sede</label>
                <select name="status_sede" id="status_sede" class="form-control" required>
                    <option value="">Seleccione</option>
                    if ($sedes->localizacion == 1)
                    {
                    <option value="1">Activo</option>}else{
                    <option value="0">Inactivo</option>}
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Otro Pais</label>
                <input value="{{$sedes->otropais}}" type="text" id="otropais" class="form-control" name="otropais" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Casa / Edificio</label>
                <input value="{{$sedes->casaedificio}}" type="text" id="casaedificio" class="form-control" name="casaedificio" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Piso</label>
                <input value="{{$sedes->piso}}" type="text" id="piso" class="form-control" name="piso" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
    </div><br>

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">ACTUALIZAR</button>
                <a href="{{url('/sedes')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>
    </div>
</form>
@endsection
