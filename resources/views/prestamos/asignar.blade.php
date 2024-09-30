@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Emitir Prestamo')


@section('content')
<h3><strong>Datos del Solicitante</strong></h3>
<form method="post" action="{{url('/prestamos/guardar')}}">
    {{ csrf_field()}}

    <div class="rows">
        <div class="col-sm-3">
            <div class="input-group mb-3">
                <p class="form-control">{{$prestamo->solicitantes->cedula}}</p>
                {{-- <input type="text" id="cedula" name="cedula" value="{{$prestamo->solicitantes->cedula}}" class="form-control" placeholder="Ingrese la Cedula" aria-label="Ingrese la Cedula" aria-describedby="button-addon2"> --}}
                {{-- <input type="hidden" id="solicitante_id" name="solicitante_id"> --}}
                {{-- <button class="btn btn-outline-danger" type="button" id="buscar" name="buscar">Buscar</button> --}}
            </div>
        </div>
              <div class="col-sm-12">
                <div class="input-group">
                    <span class="input-group-text bg-danger text-white">Nombre y Apellido</span>
                    <span class="form-control">{{$prestamo->solicitantes->nombres}}</span>
                    <span class="form-control">{{$prestamo->solicitantes->apellidos}}</span>
                </div>
              </div>
            </div><br>
    <div class="row">

        <div class="col-sm-3">
            <div class="form-group">
                <label>Fecha Solicitud</label>
                <span class="form-control">{{$prestamo->fecha_solicitud}}</span>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Fecha Salida</label>
                <span class="form-control">{{$prestamo->fecha_salida}}</span>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Fecha Devolucion Temporal </label>
                <span class="form-control">{{$prestamo->fecha_devolucion}}</span>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Ubicacion</label>
                <span class="form-control">{{$prestamo->ubicacion_prestamo}}</span>
            </div>
        </div>

        <br>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Motivo</label>
                <span class="form-control">{{$prestamo->motivo}}</span>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Observacion</label>
                <span class="form-control">{{(isset($prestamo->observacion)) ? $prestamo->observacion: 'Sin Observacion'}}</span>
            </div>
        </div>
    </div>
    <br>
</form><br><br>

<button type="button" class="btn btn-outline-danger text-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar un Bien</button>
<table class="table table-hover table-stripe">
    <thead>
        <th>#</th>
        <th># Bien</th>
        <th>Nombre</th>
        <th>Modelo</th>
        <th>Condicion</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach($PrestamosBienes as $valor)
            <tr>
                <td>{{$valor->id}}</td>
                <td>{{$valor->N_bien}}</td>
                <td>{{$valor->nombre}}</td>
                <td>{{$valor->modelos->denominacion}}</td>
                <td>{{$valor->condiciones->descripcion}}</td>
                <td>
                    <a href="{{ url('deshabilitar/'. $valor->id.'/bien') }}" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple"><i class="fa fa-times"></i></a>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>

<form method="post" action="{{url('prestamos/'.$prestamo->id.'/confirmar')}}">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">GENERAR PRESTAMO</button>
                <a href="{{url('prestamos/')}}" class="btn btn-outline-danger">ELIMINAR BORRADOR</a>
            </div>
        </div>
    </div>
</form>

@if (session('descartar')== 'ok')

    <script src="{{ asset('js/sweetalert2@11.js')}}"></script>
    <script>
        Swal.fire({
                icon: 'success',
                title: 'Borrador Descartardo Exitosamente',
                showConfirmButton: false,
                timer: 1500
        })
    </script>
@endif

@if (session('asignar')== 'ok')

    <script src="{{ asset('js/sweetalert2@11.js')}}"></script>
    <script>
        Swal.fire({
                icon: 'success',
                title: 'Bien Tecnologico Agregado',
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
                title: 'Ha sido Confirmado',
                showConfirmButton: false,
                timer: 1500
        })
    </script>
@endif

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Selecciona el Bien</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="/asignar/bien">
            @csrf
            <input type="hidden" id="prestamo_id" name="prestamo_id" value="{{$prestamo->id}}">
            <select name="bien" id="bien" class="form-control">
                <option value="">Seleccione</option>
                @foreach($bienes as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                @endforeach
            </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
      </form>
    </div>
  </div>
</div>




@endsection
