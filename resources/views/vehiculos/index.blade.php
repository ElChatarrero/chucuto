@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Lista de Bienes Vehiculares')

@section('content')
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CrearVehiculo">
  Crear Vehiculo
</button><br><br>
<form method="get" action='/bienes'>
<div class="rows">
        <div class="col-sm-4">
            <div class="form-group">
                <label>Categorias</label>
                <select name="categoria" id="categoria_id" class="form-control">
                <option value="">Seleccione</option>


                </select>
            </div>
        </div>
        <br/>

                 <div class="col-sm-2">
                    <input class=form-control type="submit" value="Buscar Categoria">
                </div>

</div>
</form>
        <br>
<table class="table table-hover">
  <thead>
    <th>Categorias</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Nro de Bien Tecnologico</th>
    <th>Condiciones</th>
    <th>Disponibilidad</th>
    <th>Acciones</th>
    <th></th>
  </thead>
  <tbody>

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
            title: 'Bien Deshabilitado Exitosamente',
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
            title: 'Bien Habilitado Exitosamente',
            showConfirmButton: false,
            timer: 1500
    })
</script>
@endif

@endsection


