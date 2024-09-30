@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Listado de vehiculos en mantenimiento')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Ingresar vehiculo en mantenimiento
</button>
<table class="table table-hover">
  <thead>
    <th>Fecha de entrada al mantenimiento</th>
    <th>Fecha estimada de salida del mantenimiento</th>
    <th>Tipo de mantenimiento</th>
    <th>Tipo de vehiculo</th>
    <th>Taller asignado</th>
    <th>Motivo del mantenimiento</th>
    <th>Acciones</th>
  </thead>

<tbody>
    @foreach ($mantenimiento as $mantenimiento)
        <tr>
            <td>{{$mantenimiento->cedula}}</td>
            <td>{{$mantenimiento->nombre}}</td>
            <td>{{$mantenimiento->apellido}}</td>
            <td>{{$mantenimiento->tipo_de_vehiculo}}</td>
            <td>{{$mantenimiento->tipo_de_vehiculo}}</td>
            <td>{{$mantenimiento->tipo_de_vehiculo}}</td>
            <td>{{$mantenimiento->motivo_de_mantenimiento}}</td>
            <td class="td-actions text-left">
                <form class="deshabilitarA" method="POST" action="{{ url('mantenimiento/'.$mantenimiento->id.'/deshabilitar')}}">
                    {{ csrf_field()}}
                    {{ method_field('DELETE') }}
                    @if($mantenimiento->status == 1)
                    <a href="{{ url('/mantenimiento/'. $mantenimiento->id.'/editar') }}" rel="tooltip" title="Editar mant$mantenimiento" class="btn btn-success btn-simple"><i class="fa fa-edit"></i></a>
                    <button  type="submit" rel="tooltip" title="Deshabilitar mant$mantenimiento" class="btn btn-danger btn-simple"><i class="fa fa-times"></i></button>
                    @else
                        <a href="{{ url('/mantenimiento/'. $mantenimiento->id.'/habilitar') }}" rel="tooltip" title="habilitar Mantenimiento" class="btn btn-success btn-simple"><i class="fa fa-check"></i></a>
                    @endif
                </form>
             </td>
        </tr>
    @endforeach
  </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro De Vehiculos en Mantenimiento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{url('/mantenimiento/guardar')}}">
            {{ csrf_field()}}
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Placa</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Año del vehiculo</label>
                        <input type="number" class="form-control">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Serial</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Color</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Motivo de Mantenimiento</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nro de Bien Nacional</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Observación</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Categorias</label>
                        <select name="categoria_id" id="categoria" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Modelos</label>
                        <select name="modelos_id" id="modelos" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tipo de mantenimiento</label>
                        <select name="modelos_id" id="modelos" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Taller asignado</label>
                        <select name="modelos_id" id="modelos" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Marcas</label>
                        <select name="marca_id" id="marca" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Fecha de entrada al mantenimiento</label>
                        <input type="date" class="form-control">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Fecha estimada de salida del mantenimiento</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
            </div>
                <br>

        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">REGISTRAR</button>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <a href="{{url('/mantenimiento')}}" class="btn btn-outline-danger">REGRESAR</a>
                </div>
            </div>
        </div>

    </form>
      </div>

    </div>
  </div>
</div>
@endsection
