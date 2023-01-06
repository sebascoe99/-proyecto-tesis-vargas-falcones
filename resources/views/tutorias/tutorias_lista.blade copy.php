@extends('layout.app')
@section('title', 'Lista Tutorias')
@section('content')

<section class="content">

    <div class="recent--patientslu">
        <div class="title">
            <h2 class="section--title">LISTA DE TUTORIAS</h2>
            <a href="/crear-tutorias" class="add"><i class="ri-add-line"></i>Nuevo tutorias</a>
            <!-- <button class="add"><a href="/crear-usuario"><i class="ri-add-line"></i></a>Nuevo usuario</button> -->
        </div>
        <div class="tableslu">
            <table>
                <thead>
                    <tr>
                        <th>Carrera</th>
                        <th>Asignatura</th>
                        <th>Semestre</th>
                        <th>Tutor</th>
                        <th>Tema</th>
                        <th>Horarios</th>
                        <th>Estudiantes maximo</th>
                        <th>Estudiantes existentes</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tutorships as $tutorship)
                        <tr>
                            <td data-label="Carrera">{{ $tutorship->career_id }}</td>
                            <td data-label="Asignatura">{{ $tutorship->course_id }}</td>
                            <td data-label="Semestre">{{ $tutorship->career_id }}</td>
                            <td data-label="Tutor">{{ $tutorship->teacher_id }}</td>
                            <td data-label="Tems">{{ $tutorship->theme }}</td>
                            <td data-label="Horarios">{{ $tutorship->date }}</td>
                            <td data-label="Estudiantes maximo">{{ $tutorship->max_students }}</td>
                            <td data-label="Estudiantes existentes">{{ $tutorship->career_id }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <form action="" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-primary btn-sm ri-edit-line edit" type="submit"></button>
                                        </form>
                                    </div>
                                    <div class="col-sm-6" style="padding-left: 0%">
                                        <form action="{{ route('delete_tutorship', $tutorship) }}" method="POST">
                                            @csrf             
                                            @method('delete')                               
                                            <button class="btn btn-danger btn-sm ri-delete-bin-line delete" type="submit"></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                        {{-- <td data-label="Carrera">Ingenieria en sistemas computacionales</td>
                        <td data-label="Asignatura">Programacion web</td>
                        <td data-label="Semestre">10</td>
                        <td data-label="Tutor">Ing Rafael Marin</td>
                        <td data-label="Tems">Sistema de tutorias</td>
                        <td data-label="Horarios">20:00 22:00</td>
                        <td data-label="Estudiantes maximo">5</td>
                        <td data-label="Estudiantes existentes">2</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td> --}}
                    
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection
