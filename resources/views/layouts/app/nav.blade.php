<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('home') }}">
            <img style="width: 150px; margin: auto 30px;" src="{{ asset('img/mintur-logo2.png') }}">
            <span class="align-middle">Sistema de Asignación de Bienes Nacionales</span>
        </a>
        <ul class="sidebar-nav">

            <li class="sidebar-item active">
                <a class="sidebar-link" href="/">
                    <i class="fa fa-house"></i>
                    <span class="align-middle"><strong >Menú Principal</strong></span>
                </a>
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{url('/mantenimiento')}}">
                    <i class="fa fa-car"></i>
                    <span class="align-middle"><strong >Mantenimiento de Vehiculos</strong></span>
                </a>
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{url('/mantenimientoTec')}}">
                <i class="fa-solid fa-laptop text-white" ></i>
                    <span class="align-middle"><strong >Mantenimiento de Equipos Tecnologicos</strong></span>
                </a>
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{url('/bienes')}}">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <span class="align-middle"><strong>Inventario</strong></span>
                </a>
            </li>

            <li class="sidebar-item active">
                <a data-bs-target="#tablas" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="fa-solid fa-chart-simple"></i>
                    <span class="align-middle"><strong>Administración</strong></span>
                </a>
                <ul id="tablas" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar"
                    style="">

                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/autoridadrs')}}"><strong class="text-white">Autoridad Responsable</strong> <span class="sidebar-badge badge bg-primary"></span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/cargos')}}"><strong class="text-white">Cargos</strong> <span class="sidebar-badge badge bg-primary"></span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/categorias')}}"><strong class="text-white">Categorías</strong> <span class="sidebar-badge badge bg-primary"></span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/condiciones')}}"><strong class="text-white">Condiciones</strong> <span class="sidebar-badge badge bg-primary"></span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/marcas')}}"><strong class="text-white">Marcas</strong> <span class="sidebar-badge badge bg-primary"></span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/modelos')}}"><strong class="text-white">Modelos</strong> <span class="sidebar-badge badge bg-primary"></span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/responsables')}}"><strong class="text-white">Responsable</strong> <span class="sidebar-badge badge bg-primary"></span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/sedes')}}"><strong class="text-white">Sedes</strong><span class="sidebar-badge badge bg-primary"></span></a></li>



                    @if (auth()->user()->rol_id==1)


                    @endif
                </ul>
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{url('/solicitantes')}}">
                <i class="fa-solid fa-users"></i>
                <span class="align-middle"><strong>Solicitantes</strong></span>
                </a>
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{url('/prestamos')}}">
                <i class="fa-solid fa-truck-ramp-box"></i>
                    <span class="align-middle"><strong>Préstamos</strong></span>
                </a>
            </li>

            @if (auth()->user()->rol_id==1)
            <li class="sidebar-item active">
                <a class="sidebar-link"  href="{{url('/tecnicos')}}">
                    <i class="fa fa-user"></i>
                    <span class="align-middle"><strong>Técnicos</strong></span>
                </a>
            </li>
            @endif
            <li class="sidebar-item active">
            <a data-bs-target="#reportes" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                 <i class="fa-solid fa-file-pdf"></i>
                    <span class="align-middle"><strong>Reportes</strong></span>
                </a>
                <ul id="reportes" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar"
                    style="">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{url('/reportes')}}"><strong class="text-white">Reportes de Préstamo e Inventario</strong> <span class="sidebar-badge badge bg-primary"></span></a></li>
                </ul>

            </li>


                <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Chart.js</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">ApexCharts <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
