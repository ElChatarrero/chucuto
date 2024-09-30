@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Solicitud de Prestamos')

@section('content')
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CrearPrestamo">
  Emitir Prestamo
</button><br><br>
<table class="table table-hover">
  <thead>
    <th>Solicitante</th>
    <th>Fecha Solicitud</th>
    <th>Fecha Salida</th>
    <th>Fecha de Devolucion</th>
    <th>Ubicacion Prestamo</th>
    <th>Estatus</th>
    <th>Acciones</th>
  </thead>
  <tbody>
    @foreach ($prestamos as $prestamo)
        <tr>
            <td>{{$prestamo->solicitantes->nombres}}</td>
            <td>{{$prestamo->fecha_solicitud}}</td>
            <td>{{$prestamo->fecha_salida}}</td>
            <td>{{$prestamo->fecha_devolucion}}</td>
            <td>{{$prestamo->ubicacion_prestamo}}</td>
            <td> <span class="badge {{$prestamo->estatus == 1 ? 'bg-success' : 'bg-danger'}} ">{{$prestamo->estatus == 0 ? 'Inactivo' :''}} {{$prestamo->estatus == 1 ? 'Activo' :''}} {{$prestamo->estatus == 2 ? 'Borrador' :''}}</span></td>
            <td class="td-actions text-left">

                    {{ csrf_field()}}
                    {{ method_field('DELETE') }}
                    @if($prestamo->estatus == 1)
                      <a href="{{ url('reportes/'.$prestamo->id.'/planilla') }}" rel="tooltip" title="Generar PDF" class="btn btn-info btn-simple"><i class="fa fa-download"></i></a>
                      <button type="submit" type="submit" rel="tooltip" title="Deshabilitar prestamo" class="btn btn-danger btn-simple" data-bs-toggle="modal" data-bs-target="#prestamo{{$prestamo->id}}"><i class="fa fa-times"></i></button>
                    @elseif($prestamo->estatus == 2)
                      <a href="{{ url('prestamos/'. $prestamo->id.'/crear') }}" rel="tooltip" title="Editar Borrador" class="btn btn-success btn-simple"><i class="fa fa-edit"></i></a>
                      <a href="{{ url('prestamos/'. $prestamo->id.'/descartar') }}" rel="tooltip" title="Eliminar Borrador" class="btn btn-warning btn-simple"><i class="fa fa-times"></i></a>
                    @else
                      <a href="{{ url('/reportes/'. $prestamo->id.'/planilla') }}" target="_blank" rel="tooltip" title="Generar PDF" class="btn btn-info btn-simple"><i class="fa fa-download"></i></a>
                    @endif
                 </td>
        </tr>
    @endforeach
  </tbody>
</table>
{{ $prestamos->links('pagination::Bootstrap-4') }}

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
            title: 'Prestamo Deshabilitado Exitosamente',
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
            title: 'Prestamo Habilitado Exitosamente',
            showConfirmButton: false,
            timer: 1500
    })
</script>
@endif

@if (session('confirmar')== 'ok')
<script src="{{ asset('js/sweetalert2@11.js')}}"></script>
<script>
    Swal.fire({
            icon: 'success',
            title: 'Prestamo Generado Exitosamente',
            showConfirmButton: false,
            timer: 1500
    })
</script>
@endif

@if (session('descartar')== 'ok')
<script src="{{ asset('js/sweetalert2@11.js')}}"></script>
<script>
    Swal.fire({
            icon: 'success',
            title: 'Borrador Eliminado Exitosamente',
            showConfirmButton: false,
            timer: 1500
    })
</script>
@endif



@foreach ($prestamos as $prestamo)

<div class="modal fade" id="prestamo{{$prestamo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Motivo de Desincorporación</h5>
        <h5 class="modal-title" id="exampleModalLabel">Fecha de Devolucion</h5>

          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('prestamos/'.$prestamo->id.'/deshabilitar')}}" method="post">
        {{ csrf_field()}}
        {{ method_field('DELETE') }}
            <input type="text"name="motivo_des"class="form-control">
            <input type="hidden" value="{{$prestamo->id}}">
            <h5 class="modal-title" id="exampleModalLabel">Fecha de Devolucion</h5>
            <input class="form-control" type="date" name="fecha_dev">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach



@endsection

<!-- Modal -->
<div class="modal fade" id="CrearPrestamo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Bienes Tecnologicos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('/prestamos/guardar')}}">
    {{ csrf_field()}}

    <div class="rows">
        <div class="col-sm-3">
            <div class="input-group mb-3">
                <input type="number" id="cedula" class="form-control" required name="cedula" minlength="7" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"aria-describedby="button-addon2">
                <input type="hidden" id="solicitante_id" name="solicitante_id">
                <button class="btn btn-outline-danger" type="button" id="buscar" name="buscar">Buscar</button>
            </div>
        </div>
              <div class="col-sm-12">
                <div class="input-group">
                    <span class="input-group-text bg-danger text-white">Nombre y Apellido</span>
                    <input type="text" aria-label="nombre" id="nombre" name="nombre" value="" class="form-control">
                    <input type="text" aria-label="apellido" id="apellido" name="apellido" value="" class="form-control">
                </div>
              </div>
            </div><br>
    <div class="row">

        <div class="col-sm-3">
            <div class="form-group">
                <label>Fecha Solicitud</label>
                <input type="date" id="fecha_solicitud" class="form-control" name="fecha_solicitud" required>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Fecha Salida</label>
                <input type="date" id="fecha_salida" class="form-control" name="fecha_salida" required onblur="myFunction2()">
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Fecha Devolucion Temporal</label>
                <input type="date" id="fecha_devolucion" class="form-control" name="fecha_devolucion"  onblur="myFunction()">
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Ubicacion</label>
                <input type="text" id="ubicacion_prestamo" class="form-control" name="ubicacion_prestamo" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <br><br><br>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Motivo</label>
                <input type="text" id="motivo" class="form-control" name="motivo" maxlength="45" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
        <br><br><br>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Observacion</label>
                <input type="text" id="observacion" class="form-control" name="observacion" onKeyUp="this.value=this.value.toUpperCase()"  >
            </div>
        </div>
    </div>
    <div class="col-sm-1">
            <div class="form-group">
                <input type="hidden" id="users_id" class="form-control" name="users_id" value="{{auth()->user()->id}}" required>
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
