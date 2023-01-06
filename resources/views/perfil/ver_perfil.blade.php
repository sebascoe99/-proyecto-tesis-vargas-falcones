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
                    <h2>JOSE ASENCIO</h2>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="row justify-content-start">
                    <div class="col-md-6 label-perfil">
                        <span class=""><i class="fa-solid fa-user"></i></span>
                        jasencio
                    </div>
                    <div class="col-md-6 label-perfil">
                        <span class=""><i class="fa-solid fa-envelope"></i></span>
                        jasencio@ug.edu.ec
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-md-6 label-perfil">
                        <span class=""><i class="fa-solid fa-address-card"></i></span>
                        1205752489
                    </div>
                    <div class="col-md-6 label-perfil">
                        <span class=""><i class="fa-solid fa-shield-halved"></i></span>
                        Administardor
                    </div>
                </div>
                  
            </div>
            
        </div>
    </div>
</section>

@endsection