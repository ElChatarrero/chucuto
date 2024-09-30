@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Editar Responsables')

@section('content')
<form method="post" action="{{url('/responsables/'.$responsables->id.'/actualizar')}}">
    {{ csrf_field()}}
    <div class="row">


        <div class="col-sm-2">
            <div class="form-group">
                <label>Cedula</label>
                <input value="{{$responsables->cedula}}" type="number" id="cedula" class="form-control" name="cedula" minlength="7" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required />
            </div>
        </div>

       <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Primer Nombre</label>
                <input value="{{$responsables->primernombre}}" type="text" id="primernombre" class="form-control" name="primernombre" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
            <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Segundo Nombre</label>
                <input value="{{$responsables->segundonombre}}" type="text" id="segundonombre" class="form-control" name="segundonombre" maxlength="30"  onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <br>


        <div class="col-sm-2">
            <div class="form-group">
                <label>Primer Apellido</label>
                <input value="{{$responsables->primerapellido}}" type="text" id="primerapellido" class="form-control" name="primerapellido"  maxlength="30"  onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
            <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Segundo Apellido</label>
                <input value="{{$responsables->segundoapellido}}" type="text" id="segundoapellido" class="form-control" name="segundoapellido"  maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
        <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Telefono</label>
                <input value="{{$responsables->telefono}}" type="text" id="telefono" class="form-control" name="telefono" minlength="15" placeholder="(0000) 000-0000" onkeypress="$(this).mask('(0000) 000-0000')" title="SOLO SE PERMITE NUMEROS, 11 DIGITOS" maxlength="15" required>
            </div>
        </div>
        <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Correo Electronico</label>
                <input value="{{$responsables->correoelectronico}}" type="email" id="correoelectronico" class="form-control" name="correoelectronico" maxlength="30" required>
            </div>
        </div>
        <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Cargos</label>
                <select name="cargos_id" id="cargos_id" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($cargos as $key => $value)
                    <option value="{{$key}}"  {{$responsables->cargos_id == $key ? 'selected = selected' : ''}}>{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Organismo</label>
                <select name="organismo_id" id="organismo_id" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($organismos as $key => $value)
                    <option value="{{$key}}"  {{$responsables->organismo_id == $key ? 'selected = selected' : ''}}>{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>


            <br>

            <div class="col-sm-2">
            <div class="form-group">
                <label>Gerencia General</label>
                <select name="codigo_uniadmin_id" id="codigo_uniadmin_id" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($codigo_uniadmin as $key => $value)
                    <option value="{{$key}}"  {{$responsables->codigo_uniadmin_id == $key ? 'selected = selected' : ''}}>{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Tipo</label>
                 <select name="tipo" id="tipo" class="form-control" required>
                    <option value="">Seleccione</option>
                    if ($responsables->tipo == 1)
                    {
                        <option value="1">Uso Directo</option>
                    }else{
                        <option value="0">Administrativo</option>
                    }
                 </select>
            </div>
         </div>



         <div class="col-sm-2">
            <div class="form-group">
                 <label>Estatus</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="">Seleccione</option>
                    if ($responsables->status == 1)
                    {
                        <option value="1">Activo</option>
                    }else{
                        <option value="0">Inactivo</option>
                    }


                </select>
            </div>
         </div>
    </div>
            <br>
        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">ACTUALIZAR</button>
                <a href="{{url('/responsables')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>




</form>
@endsection
