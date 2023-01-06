@extends('layout.app')
@section('title', 'Crear Facultades')
@section('content')

<section class="content">
    <div class="recent--patientscf">
        <div class="title">
            <!-- <h2 class="section--title">CREAR USUARIOS</h2> -->
            <a href="/listar-facultades" class="adds"><i class="ri-arrow-left-fill"></i>Volver</a>
            <!-- <button class="add"><i class="ri-add-line"></i>Volver</button> -->
        </div>
        <div class="tablescf">
            <div class="containerscf">
            <div class="titles">Crear Facultades</div>

            <form method="POST" action="{{ route('create_faculty') }}">
                @csrf
                <div class="user-details">
                    <div class="input-fields">
                        <input type="text" placeholder="Facultad" name="name" value="{{ old('faculty') }}" required>
                        <i class="uil uil-university icon"></i>
                    </div>
                    <div class="input-fields">
                        <input type="text" placeholder="Carrera" name="race" value="{{ old('race') }}" required>
                        <i class="uil uil-books icon"></i>
                    </div>
                    <div class="input-fields">
                        <input type="text" placeholder="Asignatura" name="course" value="{{ old('course') }}" required>
                        <i class="uil uil-book-open icon"></i>
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