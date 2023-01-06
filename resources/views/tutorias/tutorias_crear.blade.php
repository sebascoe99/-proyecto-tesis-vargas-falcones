@extends('layout.app')
@section('title', 'Crear Tutorias')
@section('content')

<section class="content">
    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-10 p-3">
            <div class="mb-3 d-flex justify-content-between">
                <h4 class="titulo">CREAR TUTORIAS</h4>
                <a href="/listar-tutorias" style="font-size:30px; width:50px; color:#000"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
            <div class="mb-2">
                <form action="{{ route('create_tutorship') }}" method="POST" class="row g-3">
                @csrf
                    <div class="col-md-12">
                        <!-- <label class="form-label perfil" for="perfil">Facultad</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-building-columns"></i></span>
                            <select class="form-select perfil-select" id="facultad" name="faculty_id" value="{{ old('faculty_id') }}" required>
                                <option selected>Selecciona facultad</option>
                                @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="carrera">Carrera</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book-open-reader"></i> </span>
                            <select class="form-select perfil-select" id="carrera" name="career_id" value="{{ old('career_id') }}" required>
                                <option selected>Selecciona facultad</option>
                                <option value="1">Administración</option>
                                <option value="2">Sistemas</option>
                                <option value="3">Networking</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="asignatura">Asignatura</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book"></i> </span>
                            <select class="form-select perfil-select" name="course_id" value="{{ old('course_id') }}" required>
                                <option selected>Selecciona facultad</option>
                                <option value="1">Administración</option>
                                <option value="2">Sistemas</option>
                                <option value="3">Networking</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="tutor">Tutor</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-chalkboard-user"></i></span>
                            <select class="form-select perfil-select" name="teacher_id" value="{{ old('teacher') }}" required>
                                <option selected>Selecciona tutor</option>
                                @foreach ($tutors as $tutor)
                                    <option value="{{ $tutor->id }}">{{ $tutor->name }} {{ $tutor->last_name }} {{ $tutor->second_last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="max_Est">Maximo de estudiantes</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-users"></i></span>
                            <input type="number" class="form-control" placeholder="Maximo de estudiantes" name="max_students" value="{{ old('numberStudent') }}" required>
                        </div>
                        
                    </div>
                    <div class="col-lg-12">
                        <!-- <label class="form-label" for="tema">Tema</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book-open"></i></span>
                            <input type="text" class="form-control" placeholder="Tema" name="theme" value="{{ old('theme') }}" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="lugar">Lugar</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-map-location-dot"></i></span>
                            <input type="text" class="form-control" placeholder="Lugar" name="place" value="{{ old('place') }}" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="fecha">Fecha</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                            <input type="date" class="form-control" placeholder="Fecha" name="date" value="{{ old('date') }}" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="inicio">Hora inicio</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
                            <input type="time" class="form-control" placeholder="Hora inicio" name="start_time" value="{{ old('start_time') }}" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="form-label" for="fin">Hora fin</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
                            <input type="time" class="form-control" placeholder="Hora fin" name="end_time" value="{{ old('end_time') }}" required>
                        </div>
                    </div>
                    
                    <button type="button" class="btn btn-primary btn-lg">GUARDAR</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection