@extends('layout.app')
@section('title', 'Lista Usuario')
@section('content')

<section class="content">

    <div class="recent--patientslu">

        <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="{{ asset('img/profile.jpg') }}" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>
                <button type="button" class="boton-portada">
                    <i class="far fa-image"></i> Cambiar fondo
                </button>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo">José Asencio Bermudez</h3>
                <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="icono fas fa-user-check"></i> jAsencio:</li>
                    <li><i class="icono fas fa-building"></i> Administardor</li>
                    <!-- <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
                    <li><i class="icono fas fa-briefcase"></i> Trabaja en.</li> -->
                </ul>
                <ul class="lista-datos">
                    <li><i class="icono fas fa-envelope"></i> jasencio.b@ug.edu</li>
                    <li><i class="icono fas fa-id-card"></i> 1205487532</li>
                    <!-- <li><i class="icono fas fa-user-check"></i> Registro.</li>
                    <li><i class="icono fas fa-share-alt"></i> Redes sociales.</li> -->
                </ul>

        </div>
    </section>
        </div>
    </div>

</section>
@endsection