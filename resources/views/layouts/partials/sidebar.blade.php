      
      <!-- sidebar menu area start -->
      <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('backend/assets/images/icon/gorepuno.png') }}"  alt="logo"></a>
            </div>
        </div>
        <div class="main-menu">
            <div class="menu-inner">
                <nav>
                    <ul class="metismenu" id="menu">
                        <li class="@yield('dashboard_active')">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>DASHBOARD</span></a>
                            <ul class="collapse">
                                <li class="@yield('dashboard_active')"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>

                            </ul>
                        </li>
                        <li class="@yield('registrar_empleado')">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>EMPLEADOS</span></a>
                            <ul class="collapse @yield('empleados_show')">
                                <li class="@yield('crear_empleado')"><a href="{{ route('admin.register') }}">Registrar Empleado Nuevo</a></li>
                                <li class="@yield('crear_cargo')"><a href="{{ route('admin.cargos.create') }}">Registrar Cargo</a></li>
                            </ul>
                        </li>
                        <li class="@yield('registrar_legajos')">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>LEGAJOS</span></a>
                            <ul class="collapse @yield('legajos_show')">

                                <li class="@yield('crear_legajo')"><a href="{{ route('admin.legajos.create') }}">Crear Legajo</a></li>
                                <li class="@yield('actualizar_legajo')"><a href="{{ route('admin.legajo.update.form') }}">Actualizar Legajo</a></li>

                            </ul>
                        </li>
                        <li class="@yield('buscar_legajos')">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>BUSQUEDA</span></a>
                            <ul class="collapse">

                                <li class="@yield('buscar_legajos')"><a href="{{ route('admin.usuarios.buscar') }}">Buscar Legajo</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- sidebar menu area end -->