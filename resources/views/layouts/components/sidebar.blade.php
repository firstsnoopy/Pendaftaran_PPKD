<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="https://ppkdjakpus.com/2024/01/02/pendaftaran-peserta-pelatihan-tahun-2024/" class="text-nowrap logo-img">
                <img src="{{asset('admin/src/assets/images/logos/potoo.png')}}" width="70px" height="70px" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                    <span class="hide-menu">Pelatihan Reguler</span>
                </li>
                {{-- @if (Auth::check()) --}}
                {{-- @if (auth()->user()->id_level == 3 || auth()->user()->id_level == 1 || auth()->user()->id_level == 1) --}}
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('peserta.index') }}" aria-expanded="false">
                        <span>
                            <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Pendaftar</span>
                    </a>
                </li>
                {{-- @endif --}}
                @if (auth()->user()->id_level == 1)
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('gelombang.index') }}" aria-expanded="false">
                            <span>
                                <iconify-icon icon="solar:file-text-bold-duotone" class="fs-6"></iconify-icon>
                            </span>
                            <span class="hide-menu">Gelombang</span>
                        </a>
                    </li>
                @endif
                @if (auth()->user()->id_level == 2)
                    <li
                        class="nav-small-cap {{ in_array(Route::currentRouteName(), ['user.index', 'userjurusan.index', 'level.index', 'jurusan.index', 'gelombang.index']) ? 'active' : '' }}">
                        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                        <span class="hide-menu">Master Data</span>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('dashboard') }}" aria-expanded="false">
                            <span>
                                <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                            </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        {{-- @if (optional(Auth::user()->userjurusan)->level == 3 || optional(Auth::user()->userjurusan)->level == 1) --}}
                        <a class="sidebar-link" href="{{ route('user.index') }}" aria-expanded="false">
                            <span>
                                <iconify-icon icon="solar:layers-minimalistic-bold-duotone"
                                    class="fs-6"></iconify-icon>
                            </span>
                            <span class="hide-menu">Pengguna</span>
                        </a>
                    </li>
                    {{-- @endif --}}
                    <li class="sidebar-item">
                        {{-- @if (optional(Auth::user()->userjurusan)->level == 3 || optional(Auth::user()->userjurusan)->level == 1) --}}
                        <a class="sidebar-link" href="{{ route('jurusan.index') }}" aria-expanded="false">
                            <span>
                                <iconify-icon icon="solar:danger-circle-bold-duotone" class="fs-6"></iconify-icon>
                            </span>
                            <span class="hide-menu">Jurusan</span>
                        </a>
                    </li>
                    {{-- @endif --}}
                    <li class="sidebar-item">
                        {{-- @if (optional(Auth::user()->userjurusan)->level == 3 || optional(Auth::user()->userjurusan)->level == 1) --}}
                        <a class="sidebar-link" href="{{ route('level.index') }}" aria-expanded="false">
                            <span>
                                <iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone"
                                    class="fs-6"></iconify-icon>
                            </span>
                            <span class="hide-menu">Level</span>
                        </a>
                    </li>
                    {{-- @endif --}}
                    @if (auth()->user()->id_level == 1 || auth()->user()->id_level == 2)
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('gelombang.index') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:file-text-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Gelombang</span>
                            </a>
                        </li>
                    @endif
                    {{-- @endif --}}
                    <li class="sidebar-item">
                        {{-- @if (optional(Auth::user()->userjurusan)->level == 3 || optional(Auth::user()->userjurusan)->level == 1) --}}
                        <a class="sidebar-link" href="{{ route('userjurusan.index') }}" aria-expanded="false">
                            <span>
                                <iconify-icon icon="solar:text-field-focus-bold-duotone" class="fs-6"></iconify-icon>
                            </span>
                            <span class="hide-menu">PIC Jurusan</span>
                        </a>
                    </li>
                    </li>
                @endif
                {{-- @endif --}}
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-6"
                        class="fs-6"></iconify-icon>
                    <span class="hide-menu">AUTH</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('login') }}" aria-expanded="false">
                        <span>
                            <iconify-icon icon="solar:login-3-bold-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Sign Out</span>
                    </a>
                </li>
            </ul>
            {{-- @endif --}}
            <div class="unlimited-access hide-menu bg-primary-subtle position-relative mb-7 mt-7 rounded-3">
                <div class="d-flex">
                    <div class="unlimited-access-title me-3">
                        <h6 class="fw-semibold fs-4 mb-6 text-dark w-75">Upgrade to pro</h6>
                        <a href="#" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy
                            Pro</a>
                    </div>
                    <div class="unlimited-access-img">
                        <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
