@extends('layout.app')
@section('title', 'Crear Tutorias')
@section('content')

<section class="content">
    <div class="recent--patientscu">
        <div class="title">
            <!-- <h2 class="section--title">CREAR USUARIOS</h2> -->
            <a href="/listar-tutorias" class="adds"><i class="ri-arrow-left-fill"></i>Volver</a>
            <!-- <button class="add"><i class="ri-add-line"></i>Volver</button> -->
        </div>
        <div class="tablescu">
            <div class="containerscu">
            <div class="titles">Crear Tutorias</div>
            <div class="form">
            <form action="{{ route('create_tutorship') }}" method="POST">
                @csrf
                <div class="user-details">
                    <div class="input-fields">
                        <select class="select-css" id="facultad" name="faculty_id" value="{{ old('faculty_id') }}" required>   
                            <option>Seleccione la facultad...</option>                        
                            @foreach ($faculties as $faculty)
                                <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                            @endforeach
                            {{-- <option value="value1">Facultad Ciencias matenaticas y fisicas</option>
                            <option value="value2">Facultad de Ciencias Económicas.</option>
                            <option value="value3">Facultad de Ciencias Médicas</option> --}}
                        </select>
                    </div>
                    <div class="input-box">
                        <select class="select-css" id="carrera" name="career_id" value="{{ old('career_id') }}" required>
                            <option>Seleccione la carrera...</option>  
                            {{-- <option value="value1">Ingenieria civil</option>
                            <option value="value2">Ingenieria en sistemas computacionales</option>
                            <option value="value3">Odontologia</option> --}}
                        </select>
                    </div>
                    <div class="input-box">
                        <select class="select-css" id="curso" name="course_id" value="{{ old('course_id') }}" required>
                            <option>Seleccione la asignatura...</option>  
                            {{-- <option value="value1">Matematica</option>
                            <option value="value2">Fisica</option>
                            <option value="value3">Programacion orientada a objeto</option> --}}
                        </select>
                    </div>
                    <div class="input-box">
                        <select class="select-css" name="teacher_id" value="{{ old('teacher') }}" required>
                            <option>Seleccione el tutor...</option>  
                            @foreach ($tutors as $tutor)
                                <option value="{{ $tutor->id }}">{{ $tutor->name }} {{ $tutor->last_name }} {{ $tutor->second_last_name }}</option>
                            @endforeach
                            {{-- <option value="value1">Ing Rafel Marin</option>
                            <option value="value2">Ing Ronny Matute</option>
                            <option value="value3">Ing Jhon Obando</option> --}}
                        </select>
                    </div>
                    <div class="input-box">
                        <input type="number" placeholder="Numero maximo de estudiantes" name="max_students" value="{{ old('numberStudent') }}" required>
                        <i class="uil uil-list-ol-alt icon"></i>
                    </div>
                    <div class="input-fields">
                        <input type="text" placeholder="Tema" name="theme" value="{{ old('theme') }}" required>
                        <i class="uil uil-swatchbook icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Lugar" name="place" value="{{ old('place') }}" required>
                        <i class="uil uil-map-marker-shield icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="date" placeholder="Fecha" name="date" value="{{ old('date') }}" required>
                        <i class="uil uil-calendar-alt icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="time" placeholder="Hora inicio" name="start_time" value="{{ old('start_time') }}" required>
                        <i class="uil uil-clock icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="time" placeholder="Hora termino" name="end_time" value="{{ old('end_time') }}" required>
                        <i class="uil uil-clock icon"></i>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Guardar">
                </div>
            </form>
            </div>
            
            <!-- <div class="login-signup">
                <span class="text">¿Ya tienes una cuenta?</span>
                <a href="/login" class="text signup-link">Inicia sesión</a>
            </div> -->

            </div>
        </div>
    </div>
    @endsection