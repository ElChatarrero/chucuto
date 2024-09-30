@extends('layouts.plantillabase')

@section('title','Home')
@section('h-title','Sistema de Asignación de Bienes Nacionales')

@section('content')

    <div class="row"> <!-- Graficas Resumen -->
    <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-primary card-header-icon bg-danger">
                <div class="card-icon">
                <i class="fa-solid fa-truck-ramp-box text-white" ></i>
                </div>
                 <h1 class="card-title text-center text-white">{{$prestamos->where('estatus',1)->count()}}</h1>

              </div>
              <div class="card-footer">
                <div>
                <i>PRESTAMOS</i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-secundary card-header-icon bg-info">
                <div class="card-icon">
                <i class="fa fa-car text-white" ></i>
                </div>
                 <h1 class="card-title text-center text-white">{{$vehiculos->count()}}</h1>

              </div>
              <div class="card-footer">
                <div>
                <i>VEHICULOS </i>
                </div>
              </div>
            </div>
          </div>


    <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-primary card-header-icon bg-info">
                <div class="card-icon">
                <i class="fa-solid fa-laptop text-white" ></i>
                </div>
                 <h1 class="card-title text-center text-white">{{$bien->where('estatus',1)->count()}}</h1>

              </div>
              <div class="card-footer">
                <div>
                <i>BIENES REGISTRADOS</i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-primary card-header-icon bg-primary">
                <div class="card-icon">
                <i class="fa-solid fa-users text-white"></i>
                </div>
                 <h1 class="card-title text-center text-white">{{$solicitantes->where('estatus',1)->count()}}</h1>

              </div>
              <div class="card-footer">
                <div>
                <i>SOLICITANTE REGISTRADOS</i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-primary card-header-icon bg-warning">
                <div class="card-icon">
                <i class="fa-solid fa-user-tie text-white"></i>
                </div>
                 <h1 class="card-title text-center text-white">{{$responsable->where('status',1)->count()}}</h1>

              </div>
              <div class="card-footer">
                <div>
                <i>RESPONSABLES</i>
                </div>
              </div>
            </div>
          </div>


          <div>
  <canvas id="myChart"></canvas>
</div>
        <script src="{{asset('js/chart.js')}}"></script>
          <script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        @foreach($condiciones as $condicion)
        "{{ $condicion->descripcion }}",
        @endforeach
      ],
      datasets: [{
        label: 'Condiciones',
        data: [
            @foreach ($condiciones as $condicion)
            {{ $condicion->bienes_count}},
            @endforeach
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
@endsection
