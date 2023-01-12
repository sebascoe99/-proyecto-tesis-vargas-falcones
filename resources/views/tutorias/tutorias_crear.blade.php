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
            {{-- {{-- <form action="{{ route('create_tutorship') }}" method="POST" class="row g-3"> --} --}}
            <form action="/crear-tutoria" method="POST" class="row g-3">
                @csrf
                    <div class="col-md-12">
                        <label class="form-label" for="perfil">Asignatura</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-building-columns"></i></span>
                            <select class="form-select perfil-select" id="asignatura" name="faculty_id" value="{{ old('faculty_id') }}" required>
                                <option selected>Asignatura</option>
                                {{-- {{-- @foreach ($Asignaturas as $asignatura)
                                    <option value="{{ $asignatura->id }}">{{ $asignatura->name }}</option>
                                @endforeach --} --}}
                                <option value="1">asignatura 1</option>
                                <option value="2">asignatura 2</option>
                                <option value="3">asignatura 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="perfil">Facultad</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-building-columns"></i></span>
                            <select class="form-select perfil-select" id="facultad" name="faculty_id">
                                <option selected>Selecciona facultad</option>
                                {{-- {{-- @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                @endforeach --} --}}
                                <option value="1">faculty 1</option>
                                <option value="2">faculty 2</option>
                                <option value="3">faculty 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="carrera">Carrera</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book-open-reader"></i> </span>
                            <select class="form-select perfil-select" id="carrera" name="career_id" value="{{ old('career_id') }}" disabled>
                            {{-- {{-- @foreach ($careers as $career)
                                    <option value="{{ $career->id }}">{{ $career->name }}</option>
                                @endforeach --} --}}
                                <option value="1">career 1</option>
                                <option value="2">career 2</option>
                                <option value="3">career 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="semestre">Semestre</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book-open-reader"></i> </span>
                            <select class="form-select perfil-select" id="semestre" name="semester_id" value="{{ old('semester_id') }}" disabled>
                                <option selected>Selecciona semestre</option>
                                <option value="1">Semestre 1</option>
                                <option value="2">Semestre 2</option>
                                <option value="3">Semestre 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="cicle">Ciclo</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book-open-reader"></i> </span>
                            <select class="form-select perfil-select" id="cicle" name="cicle_id" value="{{ old('cicle_id') }}" disabled>
                                <option selected>Selecciona ciclo</option>
                                <option value="1">Ciclo 1</option>
                                <option value="2">Ciclo 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="tutor">Tutor</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-chalkboard-user"></i></span>
                            <select class="form-select perfil-select" name="teacher_id" value="{{ old('teacher') }}" required>
                                <option selected>Selecciona tutor</option>
                                {{-- @foreach ($tutors as $tutor)
                                    <option value="{{ $tutor->id }}">{{ $tutor->name }} {{ $tutor->last_name }} {{ $tutor->second_last_name }}</option>
                                @endforeach --}}
                                <option value="1">Tutor 1</option>
                                <option value="2">Tutor 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="theme">Tema</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-users"></i></span>
                            <input type="text" class="form-control" placeholder="Tema" name="theme" required>
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="place">Lugar</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-users"></i></span>
                            <input type="text" class="form-control" placeholder="Lugar" name="place" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="date">Fecha</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-users"></i></span>
                            <input type="date" class="form-control" placeholder="Fecha" name="date" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="init_time">Hora de inicio</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-users"></i></span>
                            <input type="time" class="form-control" placeholder="Hora de inicio" name="init_time" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="end_time">Hora de fin</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-users"></i></span>
                            <input type="time" class="form-control" placeholder="Hora de fin" name="end_time" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="max_Est">Maximo de estudiantes</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-users"></i></span>
                            <input type="number" class="form-control" placeholder="Maximo de estudiantes" name="max_students" value="{{ old('numberStudent') }}" required>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="reason">Motivo</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book-open-reader"></i> </span>
                            <select class="form-select perfil-select" id="reason" name="reason" onchange="otherSelect()" disabled>
                                <option selected>Selecciona motivo</option>
                                <option value="Bajo rendimiento">Bajo rendimiento</option>
                                <option value="Comportamiento">Comportamiento</option>
                                <option value="Refuerzos">Refuerzos</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6" id="otrosInput" style="display:none;">
                        <label class="form-label" for="other">Otro</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-users"></i></span>
                            <input type="text" class="form-control" placeholder="Especifique motivo" name="other" required>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary btn-md">GUARDAR</button>
                </form>
        </div>
    </div>
</section>
<script>
    function otherSelect() {
        var esOther = $("$reason").val();
        if(esOther = 'Otros'){
            $("#otrosInput").show();
        }else{
            $("#otrosInput").hide();
        }
    }
</script>
@endsection
