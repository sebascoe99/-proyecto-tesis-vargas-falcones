@extends('layout.app')
@section('title', 'Usuarios')
@section('content')

<section class="content">
    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-10 p-3">
            <div class="mb-3 d-flex justify-content-between">
                <h4 class="titulo">CREAR USUARIO</h4>
                <a href="/listar-usuarios" style="font-size:30px; width:50px; color:#000"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
            <div class="mb-2">
                <form method="POST" action="{{ route('create_user') }}" class="row g-3">
                @csrf
                    <div class="col-md-12">
                        <label class="form-label" for="nombre">Nombre</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Nombre">
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="apellidoP">Apellido paterno</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required placeholder="Apellido paterno">
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="apellidoM">Apellido materno</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></i></span>
                            <input type="text" class="form-control" name="second_last_name" value="{{ old('second_last_name') }}" placeholder="Apellido materno">
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="cedula">Cédula</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
                            <input type="number" class="form-control" name="identification" value="{{ old('identification') }}" required placeholder="Cedula">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="usuario">Usuario</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></i></span>
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}" required placeholder="Usuario">
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="correo">Correo Institucional</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Correo Institucional">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="perfil">Perfil</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                            <select class="form-select perfil-select" name="rol" value="{{ old('rol') }}">
                                <option selected>Selecciona perfil</option>
                                @foreach ($rols as $rol)
                                    <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="contraseña">Contraseña</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-sharp fa-solid fa-eye-slash"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="confirmar">Confimar contraseña</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-sharp fa-solid fa-eye-slash"></i></span>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confimar contraseña" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">GUARDAR</button>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</section>

@endsection