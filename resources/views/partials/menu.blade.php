    <div class="navbar-light menu border-end navbar-main">
        <div class="d-flex flex-column h-100">
            {{-- brand --}}
            <div class="py-3 px-4 border-bottom brand d-flex justify-content-center">
                <a class="navbar-brand m-0 d-flex align-items-center" href="#" title="{{env('APP_NAME')}}">
                    <img src="{{ asset('images/logo.png') }}" class="logo" alt="{{env('APP_NAME')}}" />
                    <img src="{{ asset('images/logo-squadsy.png') }}" class="logo logo-lg" alt="{{env('APP_NAME')}}" />
                </a>
            </div>
            {{-- Menu --}}
            <ul class="navbar-nav d-flex flex-column py-3 px-4 h-100 overflow-y-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Inicio">
                        <span class="icon"><i class="fas fa-chart-bar"></i></span><span
                            class="ps-2">Tablero</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('articleTable')}}" title="Artículos">
                        <span class="icon"><i class="fas fa-box"></i></span><span
                            class="ps-2">Artículos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Almacenes">
                        <span class="icon "><i class="fas fa-warehouse"></i></span><span
                            class="ps-2">Almacenes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Presupuestos">
                        <span class="icon  "><i class="fas fa-file-invoice"></i></span><span
                            class="ps-2">Presupuestos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Proveedores">
                        <span class="icon "><i class="fas fa-industry"></i></span><span
                            class="ps-2">Proveedores</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Empresas">
                        <span class="icon  "><i class="fas fa-building"></i></span><span
                            class="ps-2">Empresas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Puntos de venta">
                        <span class="icon  "><i class="fas fa-store-alt"></i></span><span
                            class="ps-2">Puntos de venta</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Incidencias">
                        <span class="icon"><i class="fas fa-file"></i></span><span
                            class="ps-2">Incidencias</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Usuarios">
                        <span class="icon  "><i class="fas fa-users"></i></span><span
                            class="ps-2">Usuarios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Sucursales">
                        <span class="icon  "><i class="fas fa-hotel"></i></span><span
                            class="ps-2">Sucursales</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Manuales">
                        <span class="icon"><i class="fas fa-book"></i></span><span
                            class="ps-2">Manuales</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Tarifas">
                        <span class="icon  "><i class="fas fa-percent"></i></span><span
                            class="ps-2">Tarifas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Configuración">
                        <span class="icon"><i class="fas fa-cog"></i></span><span
                            class="ps-2">Configuración</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="bg-menu toggle-menu"></div>
