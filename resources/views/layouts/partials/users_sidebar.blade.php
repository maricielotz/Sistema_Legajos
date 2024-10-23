    <!-- sidebar menu area start -->
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('backend/assets/images/icon/gorepuno.png') }}" alt="logo"></a>
            </div>
        </div>
        <div class="main-menu">
            <div class="menu-inner">
                <nav>
                    <ul class="metismenu" id="menu">
                        <li class="@yield('dashboard_active')">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>DASHBOARD</span></a>
                            <ul class="collapse">
                                <li class="@yield('dashboard_active')"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="@yield('crear_legajoUser')">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>USUARIO</span></a>
                            <ul class="collapse ">
                                <li class="@yield('crear_legajoUser')"><a href="{{ route('legajo.create') }}">Crear y actualizar legajo</a></li>

                            </ul>

                            
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- sidebar menu area end -->
