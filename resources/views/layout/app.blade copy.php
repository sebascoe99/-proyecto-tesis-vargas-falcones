<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/inicio2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/crear_usuario.css') }}">
    <link rel="stylesheet" href="{{ asset('css/crear_facultad.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>@yield('title')</title>
</head>

<body>
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>TUTORIAS<span>UG</span></h2>
        </div>
        <div class="search--notification--profile">
            <!-- <div class="search">
                <input type="text" placeholder="Search Scdule..">
                <button><i class="ri-search-2-line"></i></button>
            </div> -->
            <div class="notification--profile">
                <!-- <div class="picon lock">
                    <i class="ri-lock-line"></i>
                </div>
                <div class="picon bell">
                    <i class="ri-notification-2-line"></i>
                </div> -->
                
                <div class="picon profile">
                    <img src="{{ asset('img/profile.jpg') }}" alt="">
                </div>
                <div class="picon logout">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                            <a href="#"><i class="ri-logout-box-r-fill"></i></a>
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <!-- <li>
                    <a href="#" id="active--link">
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Dashboard</span>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="/listar-usuarios">
                        <span class="icon icon-2"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="/listar-rol">
                        <span class="icon icon-3"><i class="ri-file-shield-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Roles</span>
                    </a>
                </li>
                <li>
                    <a href="/listar-facultades">
                        <span class="icon icon-4"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">Facultades</span>
                    </a>
                </li>
                <li>
                    <a href="/listar-asignaturas">
                        <span class="icon icon-5"><i class="ri-input-method-line"></i></span>
                        <span class="sidebar--item">Asignaturas</span>
                    </a>
                </li>
                <li>
                    <a href="/listar-tutorias">
                        <span class="icon icon-6"><i class="ri-file-copy-2-line"></i></span>
                        <span class="sidebar--item">Tutorias</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-7"><i class="ri-calendar-todo-fill"></i></span>
                        <span class="sidebar--item">Actividades</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-8"><i class="ri-pencil-ruler-2-line"></i></span>
                        <span class="sidebar--item">Pruebas</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-2"><i class="ri-pie-chart-2-line"></i></span>
                        <span class="sidebar--item">Reportes</span>
                    </a>
                </li> -->
                @if (Auth::user()->rol_id === 1)
                    <li>
                        <a href="/listar-usuarios">
                            <span class="icon icon-2"><i class="ri-user-line"></i></span>
                            <span class="sidebar--item">Usuarios</span>
                        </a>
                    </li>
                    <li>
                        <a href="/listar-rol">
                            <span class="icon icon-3"><i class="ri-file-shield-line"></i></span>
                            <span class="sidebar--item" style="white-space: nowrap;">Roles</span>
                        </a>
                    </li>
                    <li>
                        <a href="/listar-facultades">
                            <span class="icon icon-4"><i class="ri-user-line"></i></span>
                            <span class="sidebar--item">Facultades</span>
                        </a>
                    </li>    
                    <li>
                        <a href="/listar-asignaturas">
                            <span class="icon icon-5"><i class="ri-input-method-line"></i></span>
                            <span class="sidebar--item">Asignaturas</span>
                        </a>
                    </li>
                    <li>
                        <a href="/listar-tutorias">
                            <span class="icon icon-6"><i class="ri-file-copy-2-line"></i></span>
                            <span class="sidebar--item">Tutorias</span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->rol_id === 2)

                    <li>
                        <a href="#">
                            <span class="icon icon-7"><i class="ri-calendar-todo-fill"></i></span>
                            <span class="sidebar--item">Actividades</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon icon-8"><i class="ri-pencil-ruler-2-line"></i></span>
                            <span class="sidebar--item">Pruebas</span>
                        </a>
                    </li>    
                @endif

                @if (Auth::user()->rol_id === 3)
                    <li>
                        <a href="#">
                            <span class="icon icon-2"><i class="ri-pie-chart-2-line"></i></span>
                            <span class="sidebar--item">Reportes</span>
                        </a>
                    </li>                    
                @endif
            </ul>
            <ul class="sidebar--bottom-items">
                <!-- <li>
                    <a href="#">
                        <span class="icon icon-7"><i class="ri-settings-3-line"></i></span>
                        <span class="sidebar--item">Settings</span>
                    </a>
                </li> -->
                <li>
                    <!-- <a href="#">
                        <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Logout</span>
                    </a> -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </li>
            </ul>
        </div>
        <div class="main--content">
            @yield('content')
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
</body>

</html>