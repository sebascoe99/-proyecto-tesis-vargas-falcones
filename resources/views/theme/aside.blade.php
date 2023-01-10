<div class="sidebar" style="position: fixed">
    <div class="side-nav-content">
        <ul class="nav-list">
            <!-- Administrador -->
            @if(Auth::user()->rol_id == 1)
                <li class="nav-list-item">
                    <i class="fa-solid fa-building-columns"></i>
                    <span>
                        <a href="{{ route('asignaturas.index') }}">Asignaturas</a>
                    </span>
                </li>
                <li class="nav-list-item">
                    <i class="fa-solid fa-users"></i>
                    <span>
                        <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown">Usuarios</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/crear_usuarios">Crear Usuario</a></li>
                            <li><a class="dropdown-item" href="">Lista de Usuarios</a></li>
                        </ul>
                    </span>
                </li>
            @else
                <li class="nav-list-item">
                    <i class="fa-solid fa-envelope"></i>
                    <span>
                        <a href="">Mensajeria</a>
                    </span>
                </li>

                {{-- <li class="nav-list-item">
                    <i class="fa-solid fa-book-open"></i>
                    <span>
                        <a href="{{ route('asignaturas.index') }}">Asignaturas</a>
                    </span>
                </li> --}}
                <li class="nav-list-item">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <span>
                        {{-- <a href="/tutoria_tutor">Tutorias</a> --}}
                        <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown">Tutorias</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ route('tutorias.index') }}">Tutorias</a></li>
                            <li><a class="dropdown-item" href="/crear-tutorias">Crear Tutoria</a></li>
                            <li><a class="dropdown-item" href="">Historial de Tutoria</a></li>
                            {{-- <li><a class="dropdown-item" href="/home-tutorias-solicitud">Solicitar tutoria</a></li> --}}
                            {{-- <li><a class="dropdown-item" href="home-tutorias-buscar">Buscar tutoria</a></li> --}}
                        </ul>
                    </span>
                </li>
                {{-- <li class="nav-list-item">
                    <i class="fa-solid fa-folder"></i>
                    <span>
                        <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown">Actividades</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/home-actividades-manuales">Calificación manual</a></li>
                            <li><a class="dropdown-item" href="/home-actividades-predefinidas">Calificación predefinida</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </span>
                </li>
                <li class="nav-list-item">
                    <i class="fa-solid fa-folder"></i>
                    <span>
                        <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown">Pruebas</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/home-pruebas-crear">Crear prueba</a></li>
                            <li><a class="dropdown-item" href="#">Banco de preguntas</a></li>
                            <li><a class="dropdown-item" href="/home-notas-evaluacion">Notas de evaluación</a></li>
                        </ul>
                    </span>
                </li>
                <li class="nav-list-item">
                    <i class="fa-solid fa-font"></i>
                    <span>
                        <a href="/home-pruebas-crear">Pruebas</a>
                    </span>
                </li>
                <li class="nav-list-item">
                    <i class="fa-solid fa-users"></i>
                    <span>
                        <a href="/home-pruebas-crear">Reportes</a>
                    </span>
                </li> --}}
            @endif

        </ul>
        <hr>
        <div class="dropdown d-flex align-items-end">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('img/'.Auth::user()->ruta_imagen) }}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">{{ Auth::user()->username }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="{{ route('perfil.index') }}">Perfil</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{-- {{ __('Log Out') }} --}}
                            Salir
                            <a class="dropdown-item" href="#"></a>
                        </x-responsive-nav-link>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

