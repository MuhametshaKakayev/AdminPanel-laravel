@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ route('dashboard') }} ">
            <img src="{{ asset('assets') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-white"> ADMİN PANEL</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    {{-- <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main"> --}}
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'user-profile' ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('user-profile') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="fas fa-user-circle ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'user-management' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('user-management') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Management</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'dashboard' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'genelayar' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('optionShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Genel ayar</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'gelenMesaj' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('mesageShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Gelen Mesajlar</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'news' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('hbrDuyuruShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Haber ve Duyurular</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'blog' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('blogShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Blog</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'sayfalar' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('sayfalarShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Sayfalar</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'urunler' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('urunlerShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Urunler</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'hizmetler' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('hizmetShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Hizmetler</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'fotoSlider' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('fotoSliderShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Foto-Slider</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'fotoGaleri' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('fotoGaleriShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Foto Galeri</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'videoGaleri' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('videoGaleriShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Video Galeri</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'referans' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('referanShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Referanslar</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'subeler' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('subelerShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Subeler</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'bayiler' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('bayilerShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Bayiler</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'belgeler' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('belgelerShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Belgeler</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'eKatalog' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('eKatalogShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">E-Katalog</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'menuAyar' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('menuAyarShow') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Menu ayar</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link text-white {{ $activePage == 'dillerShow' ? ' active bg-gradient-primary' : '' }}"type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" href="#" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Diller</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{ route ("dillerShow") }}">Dil</a></li>
                    <li><a class="dropdown-item" href="{{"dillerShowTr"}}">Türkce</a></li>
                    <li><a class="dropdown-item" href="{{"dillerShowEng"}}">İnglizce</a></li>
                </ul>
            </li>







            {{-- <li class="nav-item">
                <div class="dropdown nav-link text-white {{ $activePage == 'diller' ? ' active bg-gradient-primary' : '' }}">
                    <button class="" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons opacity-10">dashboard</i> Diller
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="{{ route("dillerShow") }}">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </li> --}}





            {{-- <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'tables' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('tables') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Tables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'billing' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('billing') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'virtual-reality' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('virtual-reality') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">view_in_ar</i>
                    </div>
                    <span class="nav-link-text ms-1">Virtual Reality</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'rtl' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('rtl') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                    </div>
                    <span class="nav-link-text ms-1">RTL</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'notifications' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('notifications') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">notifications</i>
                    </div>
                    <span class="nav-link-text ms-1">Notifications</span>
                </a>
            </li> --}}
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'profile' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('profile') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('static-sign-in') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">login</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('static-sign-up') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
    {{-- <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-laravel" target="_blank">Free Download</a>
        </div>
        <div class="mx-3">
            <a class="btn bg-gradient-primary w-100" href="../../documentation/getting-started/installation.html" target="_blank">View documentation</a>
        </div>
        <div class="mx-3">
            <a class="btn bg-gradient-primary w-100"
                href="https://www.creative-tim.com/product/material-dashboard-pro-laravel" target="_blank" type="button">Upgrade
                to pro</a>
        </div>
    </div> --}}
</aside>
