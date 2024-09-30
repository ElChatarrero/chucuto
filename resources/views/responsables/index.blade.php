@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Listado de Responsables')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Crear Responsable
</button><br></br>
<div class="rows">
            <div class="col-sm-3">
                <form method="get" class="form-inline pull-left" action="/responsables/">
                    <div class="form-group">
                        <input type="number" name="cedula" placeholder="Buscar por Cédula" class="form-control">
                    </div>
                </form>
            </div>
        </div>
        <br>
<table class="table table-hover">
  <thead>
    <th>Cedula-Nombre y Apellido</th>
    <th>Gerencia General</th>
    <th>Tipo Responsable</th>
    <th>Estatus</th>
    <th>Acciones</th>
  </thead>
  <tbody>
    @foreach ($responsables as $responsable)
        <tr>
            <td>{{$responsable->cedula}}-{{$responsable->primernombre}}-{{$responsable->primerapellido}}</td>
            <td>{{$responsable->codigo_uniadmin->descripcion}}</td>
            <td>{{$responsable->tipo == 1 ? 'Uso Directo' : 'Administrativo'}}</td>
            <td> <span class="badge {{$responsable->status == 1 ? 'bg-success' : 'bg-danger'}} ">{{$responsable->status == 1 ? 'Disponible' : 'Inactivo'}}</span></td>
            <td class="td-actions text-left">
                <form class="deshabilitarres" method="POST" action="{{ url('responsables/'.$responsable->id.'/deshabilitar')}}">
                    {{ csrf_field()}}
                    {{ method_field('DELETE') }}
                    @if($responsable->status == 1)
                    <a href="{{ url('/responsables/'. $responsable->id.'/editar') }}" rel="tooltip" title="Editar Responsable" class="btn btn-success btn-simple"><i class="fa fa-edit"></i></a>
                    <button  type="submit" rel="tooltip" title="Deshabilitar Responsable" class="btn btn-danger btn-simple"><i class="fa fa-times"></i></button>
                    @else
                        <a href="{{ url('/responsables/'. $responsable->id.'/habilitar') }}" rel="tooltip" title="habilitar Responsable" class="btn btn-success btn-simple"><i class="fa fa-check"></i></a>
                    @endif
                </form>
             </td>
        </tr>
    @endforeach
  </tbody>
</table>
{{ $responsables->links('pagination::Bootstrap-4') }}

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
            title: 'Responsable Deshabilitado Exitosamente',
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
            title: 'Responsable Habilitado Exitosamente',
            showConfirmButton: false,
            timer: 1500
    })
</script>
@endif


@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Responsable</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('/responsables/guardar')}}">
    {{ csrf_field()}}
    <div class="row">


        <div class="col-sm-2">
            <div class="form-group">
                <label>Cedula</label>
                <input type="number" id="cedula" class="form-control" name="cedula" minlength="7" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required/>
            </div>
        </div>

       <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Primer Nombre</label>
                <input type="text" id="primernombre" class="form-control" name="primernombre" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
            <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Segundo Nombre</label>
                <input type="text" id="segundonombre" class="form-control" name="segundonombre" maxlength="30"  onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>

        <br>


        <div class="col-sm-2">
            <div class="form-group">
                <label>Primer Apellido</label>
                <input type="text" id="primerapellido" class="form-control" name="primerapellido" maxlength="30" required onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
            <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Segundo Apellido</label>
                <input type="text" id="Segundoapellido" class="form-control" name="segundoapellido" maxlength="30"  onKeyUp="this.value=this.value.toUpperCase()">
            </div>
        </div>
        <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Telefono</label>
                <input type="text" id="telefono" class="form-control" name="telefono" minlength="15" placeholder="(0000) 000-0000" onkeypress="$(this).mask('(0000) 000-0000')" title="SOLO SE PERMITE NUMEROS, 11 DIGITOS" maxlength="15" required>
            </div>
        </div>
        <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Correo Electronico</label>
                <input type="email" id="correoelectronico" class="form-control" maxlength="30" name="correoelectronico" required>
            </div>
        </div>
        <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Cargos</label>
                <select name="cargos_id" id="cargos_id" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($cargos as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <br>

        <div class="col-sm-2">
            <div class="form-group">
                <label>Organismo</label>
                <select name="organismo_id" id="organismo_id" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($organismos as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>


            <br>

            <div class="col-sm-2">
            <div class="form-group">
                <label>Gerencia General</label>
                <select name="codigo_uniadmin_id" id="codigo_uniadmin_id" class="form-control" required>
                    <option value="">Seleccione</option>
                    @foreach($codigo_uniadmin as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <br>


        <div class="col-sm-2">
            <div class="form-group">
                <label>Tipo</label>
                 <select name="tipo" id="tipo" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="1">Uso Directo</option>
                    <option value="0">Administrativo</option>
                 </select>
            </div>
         </div>



         <div class="col-sm-2">
            <div class="form-group">
                 <label>Estatus</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
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
                <a href="{{url('/responsables')}}" class="btn btn-outline-danger">REGRESAR</a>
            </div>
        </div>

    </div>




</form>
      </div>
    </div>
  </div>
</div>
