            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">@yield('titulo_navbar','Dashboard')</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                                <li><span>@yield('titulo_navbar','Dashboard')</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            @if(auth()->check())
                                <img class="avatar user-thumb" src="{{ asset('backend/assets/images/author/avatar.png') }}" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ auth()->user()->nombre_usuario }} <i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <form action="{{ route('logout.submit') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="dropdown-item" style="background: none; border: none; padding: 0; cursor: pointer;">Log Out</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- page title area end -->