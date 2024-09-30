@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Listado de Proveedores')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Crear Proveedor
</button>
<table class="table table-hover">
  <thead>
    <th>Descripcion</th>
    <th>RIF</th>
    <th>Tipo</th>
    <th>Otra descripcion</th>
    <th></th>
    <th>Acciones</th>
  </thead>
  <tbody>
    @foreach ($proveedores as $proveedor)
        <tr>
            <td>{{$proveedor->descripcion}}</td>
            <td>{{$proveedor->rif}}</td>
            <td>{{$proveedor->tipoproveedor == 1 ? 'Nacional' : 'Juridico'}}</td>
            <td>{{$proveedor->otradescripcion}}</td>

            <td> <span class="badge {{$proveedor->status == 1 ? 'bg-success' : 'bg-danger'}} ">{{$proveedor->status == 1 ? 'Disponible' : 'Inactivo'}}</span></td>
            <td class="td-actions text-left">
                <form class="deshabilitarpro" method="POST" action="{{ url('proveedores/'.$proveedor->id.'/deshabilitar')}}">
                    {{ csrf_field()}}
                    {{ method_field('DELETE') }}
                    @if($proveedor->status == 1)
                    <a href="{{ url('/proveedores/'. $proveedor->id.'/editar') }}" rel="tooltip" title="Editar Proveedor" class="btn btn-success btn-simple"><i class="fa fa-edit"></i></a>
                    <button  type="submit" rel="tooltip" title="Deshabilitar Proveedor" class="btn btn-danger btn-simple"><i class="fa fa-times"></i></button>
                    @else
                        <a href="{{ url('/proveedores/'. $proveedor->id.'/habilitar') }}" rel="tooltip" title="habilitar proveedor" class="btn btn-success btn-simple"><i class="fa fa-check"></i></a>
                    @endif
                </form>
             </td>
        </tr>
    @endforeach
  </tbody>
</table>
{{ $proveedores->links('pagination::Bootstrap-4') }}
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
            title: 'Proveedor Deshabilitado Exitosamente',
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
            title: 'Proveedor Habilitado Exitosamente',
            showConfirmButton: false,
            timer: 1500
    })
</script>
@endif

@endsection

<!-- Modal -->
<div class="modal fade" id="CrearUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('/proveedores/guardar')}}">
    {{ csrf_field()}}
    <div class="row">


        <div class="col-sm-2">
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" id="descripcion" class="form-control" name="descripcion" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

       <br>



        <div class="col-sm-2">
            <div class="form-group">
                <label>RIF</label>
                <input type="text" id="rif" class="form-control" name="rif" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
        <br>


        <div class="col-sm-2">
            <div class="form-group" >
            <label>Tipo</label>
            <select name="tipoproveedor" id="tipoproveedor" class="form-control" maxlength="10" required>
                <option value="">Seleccione</option>
                <option value="1">Nacional</option>
                <option value="0">Juridico</option>
            </select>
            </div>
        </div>



        <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Otra descripcion</label>
                <input type="text" id="otradescripcion" class="form-control" name="otradescripcion" maxlength="45" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>


    </div>

        <br>

        <div class="col-sm-4">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-info">REGISTRAR</button>
                <a href="{{url('/condiciones')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>

</form>
      </div>
    </div>
  </div>
</div>
