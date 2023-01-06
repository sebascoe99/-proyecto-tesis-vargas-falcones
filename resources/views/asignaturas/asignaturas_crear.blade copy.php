@extends('layout.app')
@section('title', 'Crear Asignaturas')
@section('content')

<section class="content">
    <div class="recent--patientscf">
        <div class="title">
            <!-- <h2 class="section--title">CREAR USUARIOS</h2> -->
            <a href="/listar-asignaturas" class="adds"><i class="ri-arrow-left-fill"></i>Volver</a>
            <!-- <button class="add"><i class="ri-add-line"></i>Volver</button> -->
        </div>
        <div class="tablescf">
            <div class="containerscf">
            <div class="titles">Crear Asignaturas</div>

            <form action="{{ route('create_course') }}" method="POST">
                @csrf
                <div class="user-details">
                    <select class="select-css" name="name_faculty" value="{{ old('name_faculty') }}" required>
                        @foreach ($faculties as $faculty)
                            <option value="{{ $faculty->name }}">{{ $faculty->name }}</option>
                        @endforeach
                    </select>
                    <select class="select-css" name="name_career" value="{{ old('name_race') }}" required>
                        @foreach ($careers as $career)
                            <option value="{{ $career->name }}">{{ $career->name }}</option>
                        @endforeach
                    </select>
                    <select class="select-css" name="name_course" value="{{ old('name_course') }}" required>
                        @foreach ($courses as $course)
                            <option value="{{ $course->name }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                    <select class="select-css" name="semester" value="{{ old('semester') }}" required>
                        <option value="Primero">1</option>
                        <option value="Segundo">2</option>
                        <option value="Tercero">3</option>
                        <option value="Cuarto">4</option>
                        <option value="Quinto">5</option>
                        <option value="Sexto">6</option>
                        <option value="Septimo">7</option>
                        <option value="Octavo">8</option>
                        <option value="Noveno">9</option>
                        <option value="Decimo">10</option>
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
    @endsection