@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Solicitantes de Bienes')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CrearSolicitante">
  Crear Solicitante
</button>
<br><br>
<table class="table table-hover">
  <thead>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cedula</th>
    <th>Dependencia</th>
    <th>Extension</th>
    <th>Correo Electronico</th>
    <th>Cargo</th>
    <th>Estatus</th>
    <th>Acciones</th>
  </thead>
  <tbody>
  @foreach ($solicitante as $solicitante)
        <tr>
            <td>{{$solicitante->nombres}}</td>
            <td>{{$solicitante->apellidos}}</td>
            <td>{{$solicitante->cedula}}</td>
            <td>{{$solicitante->dependencia}}</td>
            <td>{{$solicitante->extension}}</td>
            <td>{{$solicitante->correo_electronico}}</td>
            <td>{{$solicitante->cargo->descripcion}}</td>
            <td> <span class="badge {{$solicitante->estatus == 1 ? 'bg-success' : 'bg-danger'}} ">{{$solicitante->estatus == 1 ? 'Disponible' : 'Inactivo'}}</span></td>

            <td class="td-actions text-left">
                <form class="deshabilitarsoli" method="POST" action="{{ url('solicitantes/'.$solicitante->id.'/deshabilitar')}}">
                    {{ csrf_field()}}
                    {{ method_field('DELETE') }}
                    @if($solicitante->estatus == 1)
                    <a href="{{ url('/solicitantes/'. $solicitante->id.'/editar') }}" rel="tooltip" title="Editar Solicitante" class="btn btn-success btn-simple"><i class="fa fa-edit"></i></a>
                    <button type="submit" rel="tooltip" title="Deshabilitar Solicitante" class="btn btn-danger btn-simple"><i class="fa fa-times"></i></button>
                    @else
                        <a href="{{ url('/solicitantes/'. $solicitante->id.'/habilitar') }}" rel="tooltip" title="habilitar solicitante" class="btn btn-success btn-simple"><i class="fa fa-check"></i></a>
                    @endif
                 </td>
                </form>
        </tr>
    @endforeach
    </tbody>
</table>
@if (session('guardar')== 'ok')

<script src="{{ asset('js/sweetalert2@11.js')}}"></script>
<script>
    Swal.fire({
            icon: 'success',
            title: 'Registro Exitoso',
            showConfirmButton: false,
            timer: 1500
    })
</script>
@endif

@if (session('actualizar')== 'ok')

<script src="{{ asset('js/sweetalert2@11.js')}}"></script>
<script>
    Swal.fire({
            icon: 'success',
            title: 'Actualización Exitosa',
            showConfirmButton: false,
            timer: 1500
    })
</script>
@endif


@if (session('deshabilitar')== 'ok')

<script src="{{ asset('js/sweetalert2@11.js')}}"></script>
<script>
    Swal.fire({
            icon: 'success',
            title: 'Solicitante Deshabilitado Exitosamente',
            showConfirmButton: false,
            timer: 1500
    })
</script>
@endif

@if (session('habilitar')== 'ok')
<script src="{{ asset('js/sweetalert2@11.js')}}"></script>
<script>
    Swal.fire({
            icon: 'success',
            title: 'Solicitante Habilitado Exitosamente',
            showConfirmButton: false,
            timer: 1500
    })
</script>
@endif

@endsection


<!-- Modal -->
<div class="modal fade" id="CrearSolicitante" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Bienes Tecnologicos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('/solicitantes/guardar')}}">
    {{ csrf_field()}}
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" id="nombres" class="form-control" name="nombres" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>


        <div class="col-sm-3">
            <div class="form-group">
                <label>Apellidos</label>
                <input type="text" id="apellidos" class="form-control" name="apellidos" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Cedula</label>
                <input type="number" id="cedula" class="form-control" name="cedula" minlength="7" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Dependencia</label>
                <input type="text" id="dependencia" class="form-control" name="dependencia" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Extension</label>
                <input type="text" id="extension" class="form-control" name="extension" minlength="15" placeholder="(0000) 000-0000" onkeypress="$(this).mask('(0000) 000-0000')" title="SOLO SE PERMITE NUMEROS, 11 DIGITOS" maxlength="15" required>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Correo Electronico</label>
                <input type="email" id="correo_electronico" class="form-control" name="correo_electronico" maxlength="30" required >
            </div>
        </div>
    </div>

         <div class="col-sm-3">
            <div class="form-group">
                <label>Cargo</label>
                <select name="cargo_id" id="cargo_id" class="form-control" required onKeyUp="this.value=this.value.toUpperCase()">
                <option value="">Seleccione</option>
                @foreach($cargo as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
                </select>
            </div>
         </div>



    <br>

    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-outline-info">Guardar</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
