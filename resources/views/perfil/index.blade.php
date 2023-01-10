@extends('layout.app')
@section('title', 'Perfil usuario')
@section('content')

<section class="content">
    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-10 p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 perfil">
                    <div class="perfil-usuario-avatar">
                        <img src="{{ asset('img/profile.jpg') }}" alt="img-avatar">
                        <button type="button" class="boton-avatar">
                            <i class="far fa-image"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-12 text-center perfil-usuario-nombre">
                    <h2>{{ Auth::user()->name . ' ' . Auth::user()->last_name }}</h2>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="row justify-content-start">
                    <div class="col-md-6 label-perfil">
                        <span class=""><i class="fa-solid fa-user"></i></span>
                        {{ Auth::user()->username }}
                    </div>
                    <div class="col-md-6 label-perfil">
                        <span class=""><i class="fa-solid fa-envelope"></i></span>
                        {{ Auth::user()->email }}
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-md-6 label-perfil">
                        <span class=""><i class="fa-solid fa-address-card"></i></span>
                        {{ Auth::user()->identification }}
                    </div>
                    <div class="col-md-6 label-perfil">
                        <span class=""><i class="fa-solid fa-shield-halved"></i></span>
                        {{ Auth::user()->role->description }}
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
