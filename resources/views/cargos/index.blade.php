@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Listado de Cargos')

@section('content')
<!-- Button trigger modal -->
@if (auth()->user()->rol_id==1)
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Crear Cargo</button>
@endif
<table class="table table-hover">
  <thead>
    <th>Descripcion</th>
    <th>Estatus</th>
    <th>Acciones</th>
  </thead>
  <tbody>
    @foreach ($cargos as $cargo)
        <tr>
            <td>{{$cargo->descripcion}}</td>
            <td> <span class="badge {{$cargo->status == 1 ? 'bg-success' : 'bg-danger'}} ">{{$cargo->status == 1 ? 'Disponible' : 'Inactivo'}}</span></td>
            <td class="td-actions text-left">
                <form class="deshabilitarCARGO" method="POST" action="{{ url('cargos/'.$cargo->id.'/deshabilitar')}}">
                    {{ csrf_field()}}
                    {{ method_field('DELETE') }}
                    @if($cargo->status == 1)
                    <a href="{{ url('/cargos/'. $cargo->id.'/editar') }}" rel="tooltip" title="Editar Cargo" class="btn btn-success btn-simple"><i class="fa fa-edit"></i></a>
                    <button  type="submit" rel="tooltip" title="Deshabilitar Cargo" class="btn btn-danger btn-simple"><i class="fa fa-times"></i></button>
                    @else
                        <a href="{{ url('/cargos/'. $cargo->id.'/habilitar') }}" rel="tooltip" title="habilitar Cargo" class="btn btn-success btn-simple"><i class="fa fa-check"></i></a>
                    @endif
                </form>
             </td>
        </tr>
    @endforeach
  </tbody>
</table>
{{ $cargos->links('pagination::Bootstrap-4') }}

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
            title: 'Cargo Deshabilitado Exitosamente',
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
            title: 'Cargo Habilitado Exitosamente',
            showConfirmButton: false,
            timer: 1500
    })
</script>
@endif

@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de cargo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('/cargos/guardar')}}">
    {{ csrf_field()}}
    <div class="row">

        <div class="col-sm-6">
            <div class="form-group">
                <label>Cargo</label>
                <input type="text" id="descripcion" class="form-control" name="descripcion" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>


    </div>
        <br>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">REGISTRAR</button>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <a href="{{url('/cargos')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>

    </div>

    </form>
      </div>
    </div>
  </div>
</div>
