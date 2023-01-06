@extends('layout.app')
@section('title', 'Roles')
@section('content')

<section class="content">
    <div class="recent--patientscf">
        <div class="title">
            <!-- <h2 class="section--title">CREAR USUARIOS</h2> -->
            <a href="/listar-rol" class="adds"><i class="ri-arrow-left-fill"></i>Volver</a>
            <!-- <button class="add"><i class="ri-add-line"></i>Volver</button> -->
        </div>
        <div class="tablescf">
            <div class="containerscf">
            <div class="titles">Crear Roles</div>

            <form method="POST" action="{{ route('create_rol') }}">
                @csrf
                <div class="user-details">
                    <div class="input-fields">
                        <input type="text" placeholder="Nombre del rol" name="name" value="{{ old('name') }}" required >
                        <i class="uil uil-keyhole-square icon"></i>
                    </div>
                    <div class="input-fields">
                        <input type="text" placeholder="Descripcion del rol" name="description" value="{{ old('description') }}" required>
                        <i class="uil uil-align-justify icon"></i>
                    </div>                    
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
    @endsection