@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Listado de Marcas')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Crear Marca
</button>
<table class="table table-hover">
  <thead>
    <th>Nombre del Fabricante</th>
    <th>Denominacion Comercial</th>
    <th>Estatus</th>
    <th>Acciones</th>
  </thead>
  <tbody>
    @foreach ($marcas as $marca)
        <tr>
             <td>{{$marca->nombredelfabricante}}</td>
            <td>{{$marca->denominacion}}</td>


            <td> <span class="badge {{$marca->status == 1 ? 'bg-success' : 'bg-danger'}} ">{{$marca->status == 1 ? 'Disponible' : 'Inactivo'}}</span></td>

            <td class="td-actions text-left">
                <form class="deshabilitarmarcas" method="POST" action="{{ url('marcas/'.$marca->id.'/deshabilitar')}}">
                    {{ csrf_field()}}
                    {{ method_field('DELETE') }}
                    @if($marca->status == 1)
                    <a href="{{ url('/marcas/'. $marca->id.'/editar') }}" rel="tooltip" title="Editar Marca" class="btn btn-success btn-simple"><i class="fa fa-edit"></i></a>
                    <button  type="submit" rel="tooltip" title="Deshabilitar Marca" class="btn btn-danger btn-simple"><i class="fa fa-times"></i></button>
                    @else
                        <a href="{{ url('/marcas/'. $marca->id.'/habilitar') }}" rel="tooltip" title="habilitar Marca" class="btn btn-success btn-simple"><i class="fa fa-check"></i></a>
                    @endif
                </form>
                </td>
        </tr>
    @endforeach
  </tbody>
</table>
{{ $marcas->links('pagination::bootstrap-4') }}

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
            title: 'Marca Deshabilitada Exitosamente',
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
            title: 'Marca Habilitada Exitosamente',
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Marca</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('/marcas/guardar')}}">
    {{ csrf_field()}}
    <div class="row">


        <div class="col-sm-4">
            <div class="form-group">
                <label>Nombre del Fabricante</label>
                <input type="text" id="nombredelfabricante" class="form-control" name="nombredelfabricante" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

       <br>

       <div class="col-sm-4">
            <div class="form-group">
                <label>Denominacion Comercial</label>
                <input type="text" id="denominacion" class="form-control" name="denominacion" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
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
                <a href="{{url('/marcas')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>

    </div>

</form>
      </div>
    </div>
  </div>
</div>
