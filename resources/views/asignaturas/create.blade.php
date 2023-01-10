@extends('layout.app')
@section('title', 'Crear Asignaturas')
@section('content')

<section class="content">
    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-8 p-3">
            <div class="mb-3 d-flex justify-content-between">
                <h4 class="titulo">CREAR ASIGNATURAS</h4>
                <a href="{{ route('asignaturas.index') }}" style="font-size:30px; width:50px; color:#000"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
            <div class="mb-2">
                {{-- <form action="{{ route('create_course') }}" method="POST" class="row g-3"> --}}
                <form action="" method="POST" class="row g-3">
                @csrf
                    <div class="col-md-6">
                        <label class="form-label" for="perfil">Facultad</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-building-columns"></i></span>
                            <select class="form-select perfil-select" id="name_faculty" name="name_faculty" value="{{ old('name_faculty') }}" required>
                                <option value="0" selected>Selecciona facultad</option>
                                @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="carrera">Carrera</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book-open-reader"></i> </span>
                            <select class="form-select perfil-select" id='name_career' name="name_career" value="{{ old('name_race') }}" required>
                                <option value='0' selected>Selecciona carrera</option>
                                {{-- @foreach ($careers as $career)
                                    <option value="{{ $career->name }}">{{ $career->name }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="asignatura">Asignatura</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book"></i> </span>
                            <select class="form-select perfil-select" name="name_course[]" multiple="" value="{{ old('name_course') }}" required>
                                <option selected>Selecciona facultad</option>
                                {{-- @foreach ($courses as $course)
                                    <option value="{{ $course->name }}">{{ $course->name }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="asignatura">Semestre</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book"></i> </span>
                            <select class="form-select perfil-select" name="semester" value="{{ old('semester') }}" required>
                                <option selected>Selecciona semestre</option>
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
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="dosente">Dosente a asignar</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book"></i> </span>
                            <select class="form-select perfil-select" name="tutor" value="{{ old('tutor') }}" required>
                                <option selected>Selecciona Dosente</option>
                                {{-- @foreach ($Tutors as $tutor)
                                    <option value="{{ $tutor->id }}">{{ $tutor->name }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="period">Periodo</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book"></i> </span>
                            <select class="form-select perfil-select" name="period" value="{{ old('period') }}" required>
                                <option selected>Selecciona semestre</option>
                                <option value="Primero">1</option>
                                <option value="Segundo">2</option>
                            </select>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary btn-lg">GUARDAR</button>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    $("#name_faculty").change(function() {

        var idFacultad = $("#name_faculty option:selected").val();

        $.ajax({
            url: "{{ route('asignaturas.search') }}",
            type: 'POST',
            dataType: 'json',
            data: { id: idFacultad, "_token": "{{ csrf_token() }}"},
            success: function(data) {

                if(!$.trim(data)){
                    $('#name_career').empty()
                    $('#name_career').prepend("<option value='0' selected>Selecciona carrera</option>");
                }else{
                    data.forEach(function(carrera, index) {
                        $('#name_career').prepend("<option value='"+carrera['id']+"' >"+carrera['name']+"</option>");
                    });
                }
            }
        });
    });

</script>
@endpush
