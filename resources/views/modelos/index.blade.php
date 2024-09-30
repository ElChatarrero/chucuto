@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Listado de Modelos')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Crear Modelo
</button>
<table class="table table-hover">
  <thead>
    <th>Denominacion</th>
    <th>Marca</th>
    <th>Categorias</th>
    <th>Estatus</th>
    <th>Acciones</th>
  </thead>
  <tbody>
    @foreach ($modelos as $modelo)
        <tr>
            <td>{{$modelo->denominacion}}</td>
            <td>{{$modelo->marca->denominacion}}</td>
            <td>{{$modelo->categoria->descripcion}}</td>
            <td> <span class="badge {{$modelo->status == 1 ? 'bg-success' : 'bg-danger'}} ">{{$modelo->status == 1 ? 'Disponible' : 'Inactivo'}}</span></td>
            <td class="td-actions text-left">
                <form class="deshabilitarmo" method="POST" action="{{ url('modelos/'.$modelo->id.'/deshabilitar')}}">
                    {{ csrf_field()}}
                    {{ method_field('DELETE') }}
                    @if($modelo->status == 1)
                    <a href="{{ url('/modelos/'. $modelo->id.'/editar') }}" rel="tooltip" title="Editar Modelo" class="btn btn-success btn-simple"><i class="fa fa-edit"></i></a>
                    <button  type="submit" rel="tooltip" title="Deshabilitar Modelo" class="btn btn-danger btn-simple"><i class="fa fa-times"></i></button>
                    @else
                        <a href="{{ url('/modelos/'. $modelo->id.'/habilitar') }}" rel="tooltip" title="habilitar modelo" class="btn btn-info btn-simple"><i class="fa fa-check"></i></a>
                    @endif
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
{{ $modelos->links('pagination::Bootstrap-4') }}

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
                title: 'Modelo Deshabilitado Exitosamente',
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
            title: 'Modelo Habilitado Exitosamente',
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Modelo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('/modelos/guardar')}}">
    {{ csrf_field()}}
    <div class="row">

    <div class="col-sm-4">
            <div class="form-group">
                <label>Denominación</label>
                <input type="text" id="denominacion" class="form-control" name="denominacion" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label>Marca</label>
                <select name="marca_id" id="marca_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($marcas as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
                </select>
            </div>
        </div>
       <div class="col-sm-4">
            <div class="form-group">
                <label>Categorias</label>
                <select name="categorias_id" id="categorias_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($categorias as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
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
                <a href="{{url('/modelos')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>

    </div>
</form>
      </div>
    </div>
  </div>
</div>
