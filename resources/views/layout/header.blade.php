<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="{{url('/')}}">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-store-alt"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Gudang Rabat</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class=" navbar-nav text-light" id="accordionSidebar">
                    <br>
                    <li class="nav-item"><a class="{{ Request::url() == url('/') ? 'nav-link active' : 'nav-link' }}" href="{{url('/')}}"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="{{ Request::url() == url('/pemesanan') ? 'nav-link active' : 'nav-link' }}" href="{{url('/pemesanan')}}"><i class="fas fa-table"></i><span>Pesanan</span></a></li>
                    <li class="nav-item"><a class="{{ Request::url() == url('/produk') ? 'nav-link active' : 'nav-link' }}" href="{{url('/produk')}}"><i class="fas fa-table"></i><span>Data Produk</span></a></li>
                    <li class="nav-item"><a class="{{ Request::url() == url('/kategori') ? 'nav-link active' : 'nav-link' }}" href="{{url('/kategori')}}"><i class="fas fa-table"></i><span>Kategori Produk</span></a></li>
                    <li class="nav-item"><a class="{{ Request::url() == url('/member') ? 'nav-link active' : 'nav-link' }}" href="{{url('/member')}}"><i class="fas fa-table"></i><span>Member</span></a></li>
                    <li class="nav-item"><a class="{{ Request::url() == url('/admin') ? 'nav-link active' : 'nav-link' }}" href="{{url('/admin')}}"><i class="fas fa-table"></i><span>Admin</span></a></li>
                    <!-- <li class="nav-item"><a class="{{ Request::url() == url('/perusahaan') ? 'nav-link active' : 'nav-link' }}" href="{{url('/perusahaan')}}"><i class="fas fa-table"></i><span>Perusahaan</span></a></li> -->
                    <li class="nav-item"><a class="{{ Request::url() == url('/produkUnit') ? 'nav-link active' : 'nav-link' }}" href="{{url('/produkUnit')}}"><i class="fas fa-table"></i><span>Unit Produk</span></a></li>

                    <!--                     
                    <li class="nav-item"><a class="{{ Route::is('about') ? 'nav-link active' : 'nav-link' }}" href="404.php"><i class="fas fa-exclamation-circle"></i><span>Page Not Found</span></a></li>
                    <li class="nav-item"><a class="{{ Route::is('about') ? 'nav-link active' : 'nav-link' }}" href="blank.php"><i class="fas fa-window-maximize"></i><span>Blank Page</span></a></li> -->
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <h2 class="d-none d-lg-inline me-2 text-gray-700">@yield('title')</h2>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown no-arrow mx-1"></li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">


                                        <span class="d-none d-lg-inline me-2 text-gray-600 small">
                                            {{ Auth::user()->first_name ?? '' }} {{ Auth::user()->last_name ?? '' }}
                                        </span>

                                    </a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <!-- <a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400">

                                            </i>&nbsp;Profile</a><a class="dropdown-item" href="#">
                                            <i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400">

                                            </i>
                                            &nbsp;Edit Profile</a><a class="dropdown-item" href="#">
                                        </a>
                                        <div class="dropdown-divider">

                                        </div> -->
                                        <form action="{{ route('logout') }}" method="post" class="dropdown-item" href="#">
                                            @csrf
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400">

                                            </i>
                                            <button decoration="none" style="background: none; border:none;" type="submit">&nbsp;Logout</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>