@extends('layouts.plantillabase')

@section('title','Inicio')
@section('h-title','Generador de Reportes')

@section('content')

     <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <a href="{{url('/reportes/prestamos')}}" target="_blank" class="btn btn-outline-info">Generar Reporte de Prestamos</a>
                </div>
            </div>

<br>

            <div class="col-sm-3">
                <div class="form-group">
                    <a href="{{url('/reportes/bienes')}}" target="_blank" class="btn btn-outline-info">Generar Reporte de Inventario</a>
                </div>
            </div>


<br>

            <div class="col-sm-3">
                <div class="form-group">
                    <a href="{{url('/reportes/solicitantes')}}" target="_blank" class="btn btn-outline-info">Generar Reporte de solicitantes</a>
                </div>
            </div>
     </div>

@endsection






