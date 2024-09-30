@extends('layouts.plantillabase', ['class' => 'off-canvas-sidebar', 'activePage' => 'profile', 'title' => __('Listado de Usuarios')])

@section('content')
<div class="content" id="page-content-wrapper">

    <div class="container-fluid">

        <div class="col-lg-12 col-md-12">
            <!-- Button trigger modal -->
            <div class="card">
                <div class="card-header card-header-danger">
                    <h4 class="card-title text-center">LISTA DE USUARIOS</h4>
                </div>
                <div class="row">
                    <div class="col-sm-3 w-100">
                        <form method="get" class="form-inline pull-left" action="/tecnicos/">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#CrearUsuario" style="margin-left:20px;">
                                Nuevo Usuario
                            </button>
                            <div class="form-group" style="width:200px;float:right;margin-right:20px;">
                                <input type="text" name="usuario" placeholder="Buscar por Usuario" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-danger">
                            <th class="">NOMBRE</th>
                            <th class="">CORREO</th>
                            <th class="">ROL</th>
                            <th>OPCIONES</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->rol->nombre }}</td>
                                    <td class="td-actions text-left">
                                        <form method="POST" class="EliminarUsuario"
                                            action="{{ url('/tecnicos/' . $user->id . '/deshabilitar') }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            @if($user->estatus == 1)
                                                <a href="{{ url('/tecnicos/' . $user->id . '/edit') }}" rel="tooltip"
                                                    title="Editar Usuario" class="btn btn-success btn-simple"><i
                                                        class="fa fa-edit"></i></a>
                                                <button type="submit" rel="tooltip" title="Eliminar Usuario"
                                                    class="btn btn-danger btn-simple"><i class="fa fa-times"></i></button>
                                            @else
                                                <a href="{{ url('/tecnicos/' . $user->id . '/habilitar') }}" rel="tooltip"
                                                    title="habilitar tecnico" class="btn btn-success btn-simple"><i
                                                        class="fa fa-check"></i></a>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>

@if (session('duplicado') == 'ok')
    <script src="{{ asset('js/sweetalert2@11.js')}}"></script>
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Este correo está duplicado',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif



@if (session('eliminar') == 'ok')
    <script src="{{ asset('js/sweetalert2@11.js')}}"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Usuario Deshabilitado',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif

@if (session('actualizar') == 'ok')
    <script src="{{ asset('js/sweetalert2@11.js')}}"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Usuario Actualizado',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif

@if (session('guardar') == 'ok')
    <script src="{{ asset('js/sweetalert2@11.js')}}"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Usuario Creado',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif

@if (session('habilitar') == 'ok')
    <script src="{{ asset('js/sweetalert2@11.js')}}"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Habilitado Exitosamente',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif

@endsection

@section('js')
<script src="{{ asset('js/functions3.js')}}" type="text/javascript"></script>
@endsection



<!-- Modal -->
<div class="modal fade" id="CrearUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5"  id="exampleModalLabel">Registro de Usuario</h1>
        </div>
        <div class="modal-body">

      <div class="card-body p-md-2 mx-md-1">
                  <div class="text-center">
                  <img src="{{ asset('img/logo.png') }}" style="width: 185px;" alt="logo">
      </div>

        <form action="{{ route('tecnicos.save') }}" method="post">
                  {{ csrf_field() }}

                  <div class="row g-3">

                      <div class="col">
                          <label for="rol">Rol</label>
                          <select class="form-select form-select-lg mb-3" name="rol" id="rol" required>
                              <option value="">Seleccione</option>
                              @foreach( $rols as $key => $value )
                              <option value="{{ $key }}">{{ $value }}</option>
                              @endforeach

                          </select>
                      </div>

                      <div class="col">
                          <label for="nombre">Nombre</label>
                              <input class="form-control" type="text" name="nombre" id="nombre" maxlength="30" required onkeyup="this.value = this.value.toUpperCase();">
                      </div>

                      <div class="col">
                          <label for="username">Nombre De Usuario</label>
                              <input class="form-control" type="text" name="username" id="username" maxlength="30" required onkeyup="this.value = this.value.toUpperCase();">
                      </div>

                    </div>

                    <div class="col-12">
                      <label for="email">Correo</label>
                      <input class="form-control" type="email" name="email" id="email" maxlength="30" required>
                    </div>

                    <div class="col-12">
                      <label for="password">Contraseña</label>
                              <input class="form-control" type="password" name="password" id="password" maxlength="30" required>
                    </div>
                    <div class="col-12">
                      <label for="passwordConfirm">Confirmar Contraseña</label>
                              <input class="form-control" type="password" name="passwordConfirm" id="passwordConfirm" maxlength="30" required>
                    </div><br>


                  <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" value="GUARDAR" name="enviar" id="enviar" class="btn btn-success">Guardar</button>
        </div>
              </form>

          </div>
        </div>
      </div>
    </div>
  </div>


