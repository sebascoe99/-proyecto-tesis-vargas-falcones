<div class="header">
    <nav class="navbar navbar-expand-sm navbar-primary bg-primary px-2">
        <div class="container-fluid nav-title">
            <div class="side-nav-button me-3 text-light menu" style="padding: 0 0 0 10px">
                <i class="fa-solid fa-bars "></i>
                <a class="navbar-brand px-4" href="{{ route('dashboard') }}">TUTORIAS<span>UG</span> </a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                </ul>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('img/'.Auth::user()->ruta_imagen) }}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">{{ Auth::user()->username }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="{{ route('perfil.index') }}">Perfil</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                    <a class="dropdown-item" href="#"></a>
                                </x-responsive-nav-link>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
</div>
