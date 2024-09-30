@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Lista de Bienes Nacionales')

@section('content')
<div class="row">
    <div class="col-sm-2">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CrearEquipo">
            Crear Equipos
        </button><br><br>
    </div>

        <div class="col-sm-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CrearVehiculo">
                Crear Vehiculo
            </button><br><br>
        </div>

    <div class="col-sm-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CrearMueble">
          Crear Muebles De Oficina
        </button><br><br>
    </div>
</div>
<a class="btn btn-danger" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Filtro</a>
    <div class="collapse" id="collapseExample">
        <div class="card card-boddy" style="padding-top: 2%;">
            <form method="get" action='/bienes'>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Categorias</label>
                            <select name="categoriaId" id="categoriaId" class="form-control">
                                <option value="">Seleccione</option>
                            @foreach($categorias as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Marca</label>
                            <select name="marcaId" id="marcaId" class="form-control">
                                <option value="">Seleccione</option>
                                @foreach($marcas as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group">
                            <label>Modelo</label>
                            <select name="modeloId" id="modeloId" class="form-control">
                                <option value="">Seleccione</option>
                            @foreach($modelos as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Nro de Bien Nacional</label>
                            <input type="text" id="N_bien" class="form-control" name="N_bien" minlength="12" placeholder="0 0000000 00" onkeypress="$(this).mask('0 0000000 00')" title="SOLO SE PERMITE NUMEROS, 10 DIGITOS" maxlength="12">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Condicion</label>
                            <select name="condicionId" id="condicionId" class="form-control">
                                <option value="">Seleccione</option>
                                @foreach($condiciones as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Disponibilidad</label>
                            <select name="disponibilidadId" id="disponibilidadId" class="form-control">
                                <option value="">Seleccione</option>
                                <option value="1">Disponible</option>
                                <option value="2">No Disponible</option>
                                <option value="3">En Prestamo</option>
                            </select>
                        </div>
                    </div><br/>
                    <div class="col-sm-1" style="margin: auto">
                        <button class="btn btn-lg btn-round btn-danger" id="filtrar" name="filtrar" type="submit" title="BUSCAR"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<table class="table table-hover">
  <thead>
    <th>Categorias</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Nro de Bien Nacionales</th>
    <th>Condiciones</th>
    <th>Disponibilidad</th>
    <th>Acciones</th>
    <th></th>
  </thead>
  <tbody>
    @foreach ($bienes as $bien)
        <tr>
            <td>{{$bien->categoria->descripcion}}</td>
            <td>{{$bien->marca->denominacion}}</td>
            <td>{{$bien->modelos->denominacion}}</td>
            <td>{{$bien->N_bien}}</td>
            <td>{{$bien->condiciones->descripcion}}</td>
            <td> <span class="badge {{$bien->disponible == 1 ? 'bg-success' : ''}}{{$bien->disponible == 3 ? 'bg-warning' : ''}}{{$bien->disponible == 2 ? 'bg-danger' : ''}} ">{{$bien->disponible == 1 ? 'Disponible' : ''}}{{$bien->disponible == 2 ? 'No Disponible' : ''}}{{$bien->disponible == 3 ? 'En Prestamo' : ''}}</span></td>
            <td class="td-actions text-left">
                <form class="deshabilitarb" method="POST" action="{{ url('bienes/'.$bien->id.'/deshabilitar')}}">
                    {{ csrf_field()}}
                    {{ method_field('DELETE') }}
                    @if($bien->estatus == 1)
                        <a href="{{ url('/bienes/'. $bien->id.'/editar') }}" rel="tooltip" title="Editar Bien" class="btn btn-info btn-simple"><i class="fa fa-edit"></i></a>
                        <button  type="submit" rel="tooltip" title="Deshabilitar Bien" class="btn btn-danger btn-simple"><i class="fa fa-times"></i></button>
                    @else
                        <a href="{{ url('/bienes/'. $bien->id.'/habilitar') }}" rel="tooltip" title="habilitar Bien" class="btn btn-success btn-simple"><i class="fa fa-check"></i></a>
                    @endif
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
<div class="card-footer">
    {{$bienes->links('pagination::bootstrap-4')}}
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

<!-- Modal -->
<div class="modal fade" id="CrearEquipo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Bienes Tecnologicos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('/bienes/guardar')}}">
    {{ csrf_field()}}
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label>Categorias</label>
                <select name="campoCategoriaId" id="campoCategoriaId" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($tecnologicos as $tecnologico)
                <option value="{{$tecnologico->id}}">{{$tecnologico->descripcion}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Marca</label>
                <select name="campoMarcaId" id="campoMarcaId" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($marcas as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Modelo</label>
                <select name="campoModeloId" id="campoModeloId" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($modelos as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Nro. Bien</label>
                <input type="text" id="N_bien" class="form-control" name="N_bien" minlength="12" placeholder="0 0000000 00" onkeypress="$(this).mask('0 0000000 00')" title="SOLO SE PERMITE NUMEROS, 10 DIGITOS" maxlength="12" required>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Condiciones</label>
                <select name="condiciones" id="condiciones" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($condiciones as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
                </select>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <label>Nombre del Bien</label>
            <input type="text" id="nombre" name="nombre" maxlength="30" class="form-control" required onKeyUp="this.value=this.value.toUpperCase()">
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Observacion</label>
                <input type="text" id="observacion" class="form-control" name="observacion" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
    </div><br>

    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-outline-info">Guardar</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="CrearVehiculo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Bienes Vehiculares</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('/bienes/guardar')}}">
    {{ csrf_field()}}
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label>Categorias</label>
                <select name="campoCategoriaId" id="campoCategoriaId" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($vehiculos as $vehiculo)
                <option value="{{$vehiculo->id}}">{{$vehiculo->descripcion}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Marca</label>
                <select name="campoMarcaId" id="campoMarcaId" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($marcas as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Modelo</label>
                <select name="campoModeloId" id="campoModeloId" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($modelos as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Nro. Bien</label>
                <input type="text" id="N_bien" class="form-control" name="N_bien" minlength="12" placeholder="0 0000000 00" onkeypress="$(this).mask('0 0000000 00')" title="SOLO SE PERMITE NUMEROS, 10 DIGITOS" maxlength="12" required>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Condiciones</label>
                <select name="condiciones" id="condiciones" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($condiciones as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
                </select>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <label>Nombre del Bien</label>
            <input type="text" id="nombre" name="nombre" maxlength="30" class="form-control" required onKeyUp="this.value=this.value.toUpperCase()">
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Observacion</label>
                <input type="text" id="observacion" class="form-control" name="observacion" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
    </div><br>

    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-outline-info">Guardar</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="CrearMueble" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Bienes de Oficina</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('/bienes/guardar')}}">
    {{ csrf_field()}}
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label>Categorias</label>
                <select name="campoCategoriaId" id="campoCategoriaId" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($muebles as $mueble)
                    <option value="{{$mueble->id}}">{{$mueble->descripcion}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Marca</label>
                <select name="campoMarcaId" id="campoMarcaId" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($marcas as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Modelo</label>
                <select name="campoModeloId" id="campoModeloId" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($modelos as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Nro. Bien</label>
                <input type="text" id="N_bien" class="form-control" name="N_bien" minlength="12" placeholder="0 0000000 00" onkeypress="$(this).mask('0 0000000 00')" title="SOLO SE PERMITE NUMEROS, 10 DIGITOS" maxlength="12" required>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Condiciones</label>
                <select name="condiciones" id="condiciones" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($condiciones as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
                </select>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <label>Nombre del Bien</label>
            <input type="text" id="nombre" name="nombre" maxlength="30" class="form-control" required onKeyUp="this.value=this.value.toUpperCase()">
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Observacion</label>
                <input type="text" id="observacion" class="form-control" name="observacion" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
    </div><br>

    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-outline-info">Guardar</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>
