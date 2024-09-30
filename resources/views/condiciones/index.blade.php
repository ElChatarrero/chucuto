@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Listado de Condiciones')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Crear Condicion
</button>
<table class="table table-hover">
  <thead>
    <th>Descripcion</th>
    <th>Disponibilidad al Prestamo</th>
    <th>Acciones</th>
  </thead>
  <tbody>
    @foreach ($condiciones as $condicion)
        <tr>
            <td>{{$condicion->descripcion}}</td>
            <td> <span class="badge {{$condicion->disponibilidad == 1 ? 'bg-success' : 'bg-danger'}} ">{{$condicion->disponibilidad == 1 ? 'SI' : 'NO'}}</span></td>

            <td class="td-actions text-left">
                <form class="deshabilitarcondi" method="POST" action="{{ url('condiciones/'.$condicion->id.'/deshabilitar')}}">
                    {{ csrf_field()}}
                    {{ method_field('DELETE') }}
                    @if($condicion->disponibilidad == 1)
                    <a href="{{ url('/condiciones/'. $condicion->id.'/editar') }}" rel="tooltip" title="Editar Condicion" class="btn btn-success btn-simple"><i class="fa fa-edit"></i></a>
                    <button  type="submit" rel="tooltip" title="Deshabilitar Condicion" class="btn btn-danger btn-simple"><i class="fa fa-times"></i></button>
                    @else
                        <a href="{{ url('/condiciones/'. $condicion->id.'/habilitar') }}" rel="tooltip" title="habilitar Condicion" class="btn btn-success btn-simple"><i class="fa fa-check"></i></a>
                    @endif
                </form>
             </td>
        </tr>
    @endforeach
  </tbody>
</table>
<div class="card-footer">
    {{$condiciones->links('pagination::bootstrap-4')}}
</div>
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
            title: 'Condicion Deshabilitada Exitosamente',
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
            title: 'Condicion Habilitada Exitosamente',
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Condicion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('/condiciones/guardar')}}">
    {{ csrf_field()}}
    <div class="row">


        <div class="col-sm-4">
            <div class="form-group">
                <label>Condiciones</label>
                <input type="text" id="descripcion" class="form-control" name="descripcion" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

       <br>

        <div class="col-sm-4">
            <div class="form-group">
                <label>Disponible</label>
                <select name="disponibilidad" id="disponibilidad" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="1">SI</option>
                    <option value="0">NO</option>
                </select>
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
                <a href="{{url('/condiciones')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>

    </div>
</form>
      </div>
    </div>
  </div>
</div>
