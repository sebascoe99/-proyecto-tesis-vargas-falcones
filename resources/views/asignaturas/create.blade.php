@extends('layout.app')
@section('title', 'Crear Asignaturas')
@section('content')

<section class="content">
    @if(session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert"> --}}
        <strong>Excelente</strong> {{ session("msg") }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <h5><i class="icon fas fa-exclamation-triangle"></i> Error</h5>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-8 p-3">
            <div class="mb-3 d-flex justify-content-between">
                <h4 class="titulo">CREAR ASIGNATURAS</h4>
                <a href="{{ route('asignaturas.index') }}" style="font-size:30px; width:50px; color:#000"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
            <div class="mb-2">
                {{-- <form action="{{ route('create_course') }}" method="POST" class="row g-3"> --}}


                <form action=" {{route('asignaturas.store')}} " method="POST" class="row g-3">
                @csrf
                    <div class="col-md-6">
                        <label class="form-label" for="perfil">Facultad</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-building-columns"></i></span>
                            <select class="form-select perfil-select" id="name_faculty" name="name_faculty" value="{{ old('name_faculty') }}" required>
                                <option value="0" selected>Seleccione facultad</option>
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
                            <select class="form-select perfil-select" id="name_course" name="name_course" multiple=""  required>
                                <option selected>Seleccione una asignatura</option>
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
                            <select class="form-select perfil-select" id="semestre" name="semestre" value="{{ old('semester') }}" required>
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
                        <label class="form-label" for="dosente">Docente a asignar</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book"></i> </span>
                            <select class="form-select perfil-select" id="tutor" name="tutor" value="{{ old('tutor') }}" required>
                                <option selected>Selecciona Docente</option>
                                @foreach ($tutors as $tutor)
                                    <option value="{{ $tutor->id }}">{{ $tutor->name }} {{ $tutor->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="period">Periodo</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book"></i> </span>
                            <select class="form-select perfil-select" id="period" name="period">
                                @foreach ($cicles as $cicle)
                                    <option value="{{ $cicle->id }}">{{ $cicle->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button id="guardar" type="submit" class="btn btn-primary btn-lg">GUARDAR</button>
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
                    $('#name_career').empty();
                    $('#name_career').prepend("<option value='0' selected>Selecciona carrera</option>");
                }else{
                    data.forEach(function(carrera, index) {
                        $('#name_career').prepend("<option value='"+carrera['id']+"' >"+carrera['name']+"</option>");
                    });
                }
            }
        });
    });


    $("#name_career").change(function() {

        var idCareer = $("#name_career option:selected").val();

        $.ajax({
            url: "{{ route('cursos.search') }}",
            type: 'POST',
            dataType: 'json',
            data: { id: idCareer, "_token": "{{ csrf_token() }}"},
            success: function(data) {

                $('#name_course').empty();
                if(!$.trim(data)){
                    $('#name_course').prepend("<option value='0' selected>Seleccione una asignatura</option>");
                }else{
                    data.forEach(function(course, index) {
                        $('#name_course').prepend("<option value='"+course['id']+"' >"+course['name']+"</option>");
                    });
                }
            }
        });
    });

    // $("#guardar").click(function() {
    //     //
    //     //VALIDACIONES EDUARDO
    //     //

    //     var idFacultad = $("#name_faculty option:selected").val();
    //     var idCareer = $("#name_career option:selected").val();
    //     var idCourse = $("#name_course option:selected").val();
    //     var semestre = $("#semestre option:selected").text();
    //     var tutor = $("#tutor option:selected").val();
    //     var periodo = $("#period option:selected").val();
    //     var nameCourse = $("#name_course option:selected").text();


    //     $.ajax({
    //         url: "{{ route('asignaturas.store') }}",
    //         type: 'POST',
    //         dataType: 'json',
    //         data: { idFacultad: idFacultad, idCareer: idCareer, idCourse: idCourse, semestre: semestre, tutor: tutor,
    //                 periodo: periodo, nameCourse: nameCourse,"_token": "{{ csrf_token() }}"
    //               },
    //         success: function(data) {
    //             alert(data);
    //         }
    //     });

    // });

</script>
@endpush
