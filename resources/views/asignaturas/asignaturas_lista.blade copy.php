@extends('layout.app')
@section('title', 'Lista Asignaturas')
@section('content')

<section class="content">

    <div class="recent--patientslf">
        <div class="title">
            <h2 class="section--title">LISTA DE ASIGNATURAS</h2>
            <a href="/crear-asignaturas" class="add"><i class="ri-add-line"></i>Nueva asignatura</a>
            <!-- <button class="add"><a href="/crear-usuario"><i class="ri-add-line"></i></a>Nuevo usuario</button> -->
        </div>
        <div class="tableslf">
            <table>
                <thead>
                    <tr>
                        <th>Facultad</th>
                        <th>Carrera</th>
                        <th>Asignatura</th>
                        <th>Semestre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)                
                        <tr>
                            <td data-label="Facultad">{{ $course->name_faculty }}</td>
                            <td data-label="Carrera">{{ $course->name_career }}</td>
                            <td data-label="Asignatura">{{ $course->name_course }}</td>
                            <td data-label="Semestre">{{ $course->semester }}</td>
                            <td>
                                {{-- <span>
                                    <i class="ri-edit-line edit"></i>
                                    <i class="ri-delete-bin-line delete"></i>
                                </span> --}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <form action="" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-primary btn-sm ri-edit-line edit" type="submit"></button>
                                        </form>
                                    </div>
                                    <div class="col-sm-6" style="padding-left: 0%">
                                        <form action="{{ route('delete_course', $course) }}" method="POST">
                                            @csrf             
                                            @method('delete')                               
                                            <button class="btn btn-danger btn-sm ri-delete-bin-line delete" type="submit"></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection
