<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="./index.html">
            <img src="./assets/images/brand/logo/logo.svg" alt="" />
        </a>
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow  active " href="/dashboard">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                </a>

            </li>


            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Master Data</div>
            </li>


            <!-- Nav item -->
            {{-- <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                    data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                    <i data-feather="layers" class="nav-icon icon-xs me-2">
                    </i> Lab
                </a>

                <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="./pages/profile.html">
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow   " href="./pages/settings.html">
                                Settings
                            </a>

                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="./pages/billing.html">
                                Billing
                            </a>
                        </li>




                        <li class="nav-item">
                            <a class="nav-link " href="./pages/pricing.html">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="./pages/404-error.html">
                                404 Error
                            </a>
                        </li>
                    </ul>
                </div>

            </li> --}}


            <!-- Nav item -->
            @if (Auth::user()->role == 'superadmin')
                <li class="nav-item">
                    <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                        data-bs-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                        <i data-feather="lock" class="nav-icon icon-xs me-2">
                        </i> Pengguna
                    </a>
                    <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="/admin"> Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/mahasiswa"> Mahasiswa</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('items.index') }}">
                        <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                        </i>
                        Barang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('items.request_pinjaman') }}">
                        <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                        </i>
                        Request Peminjaman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('items.peminjaman') }}">
                        <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                        </i>
                        Peminjaman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('items.pengembalian') }}">
                        <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                        </i>
                        Pengembalian
                    </a>
                </li>
            @endif
            @if (Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('items.index') }}">
                        <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                        </i>
                        Barang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('items.request_pinjaman') }}">
                        <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                        </i>
                        Request Peminjaman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('items.peminjaman') }}">
                        <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                        </i>
                        Peminjaman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('items.pengembalian') }}">
                        <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                        </i>
                        Pengembalian
                    </a>
                </li>
            @endif

            @if (Auth::user()->role == 'mahasiswa')
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('itemslab.index') }}">
                        <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                        </i>
                        Lab
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('itemslab.myCart') }}">
                        <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                        </i>
                        My Cart
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('itemslab.peminjaman') }}">
                        <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                        </i>
                        Peminjaman
                    </a>
                </li>
            @endif



            <!-- Nav item -->
            {{-- <li class="nav-item">
                            <div class="navbar-heading">UI Components</div>
                        </li> --}}

            <!-- Nav item -->
            {{-- <li class="nav-item">
                            <a class="nav-link has-arrow " href="./docs/accordions.html" >
                                <i data-feather="package" class="nav-icon icon-xs me-2" >
                            </i>  Components
                            </a>
                         </li> --}}


            {{-- <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                                <i
                                data-feather="corner-left-down"

                                class="nav-icon icon-xs me-2"
                            >
                            </i
                                      > Menu Level
                            </a>
                            <div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond" aria-expanded="false" aria-controls="navMenuLevelSecond">
                                    Two Level
                                </a>
                                        <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">  NavItem 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">  NavItem 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow  collapsed  " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree" aria-expanded="false" aria-controls="navMenuLevelThree">
                                    Three Level
                                </a>
                                        <div id="navMenuLevelThree" class="collapse " data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeOne" aria-expanded="false" aria-controls="navMenuLevelThreeOne">
                                                         NavItem 1
                                            </a>
                                                    <div id="navMenuLevelThreeOne" class="collapse collapse " data-bs-parent="#navMenuLevelThree">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link " href="#!">
                                                                     NavChild Item 1
                                                        </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">  Nav Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}

            <!-- Nav item -->
            {{-- <li class="nav-item">
                            <div class="navbar-heading">Documentation</div>
                        </li> --}}

            <!-- Nav item -->
            {{-- <li class="nav-item">
                            <a class="nav-link has-arrow " href="./docs/index.html" >
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2" >
                            </i>  Docs
                            </a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link has-arrow " href="./docs/changelog.html" >
                                <i data-feather="git-pull-request" class="nav-icon icon-xs me-2" >
                            </i>  Changelog
                            </a>
                         </li> --}}




        </ul>

    </div>
</nav>
