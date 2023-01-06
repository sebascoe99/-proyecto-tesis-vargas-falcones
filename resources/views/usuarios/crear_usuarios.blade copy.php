@extends('layout.app')
@section('title', 'Usuarios')
@section('content')

<section class="content">
    <div class="recent--patientscu">
        <div class="title">
            <!-- <h2 class="section--title">CREAR USUARIOS</h2> -->
            <a href="/listar-usuarios" class="adds"><i class="ri-arrow-left-fill"></i>Volver</a>
            <!-- <button class="add"><i class="ri-add-line"></i>Volver</button> -->
        </div>
        <div class="tablescu">
            <div class="containerscu">
            <div class="titles">Crear Usuario</div>
            <div class="form">
            <form method="POST" action="{{ route('create_user') }}">
                @csrf
                <div class="user-details">
                    <div class="input-box">
                        <input type="text" placeholder="Nombre" name="name" value="{{ old('name') }}" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Apellido paterno" name="last_name" value="{{ old('last_name') }}" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Apellido materno" name="second_last_name" value="{{ old('second_last_name') }}" required >
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Numero de cédula" name="identification" value="{{ old('identification') }}" required>
                        <i class="uil uil-card-atm icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Usuario" name="username" value="{{ old('username') }}" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="Correo institucional" name="email" value="{{ old('email') }}" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="password" placeholder="Contraseña" name="password" required>
                        <i class="uil uil-lock icon"></i>
                        <!-- <i class="uil uil-eye-slash showHidePw"></i> -->
                    </div>
                    <div class="input-box">
                        <input type="password" class="password" placeholder="Confirmar contraseña" name="password_confirmation" required>
                        <i class="uil uil-lock icon"></i>
                        <!-- <i class="uil uil-eye-slash showHidePw"></i> -->
                    </div>
                    <select name="rol" value="{{ old('rol') }}" class="select-css">
                        @foreach ($rols as $rol)
                            <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="button">
                    <input type="submit" value="Guardar">
                </div>

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </form>
            </div>
            </div>
        </div>
    </div>
    @endsection