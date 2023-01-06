@extends('layout.app')
@section('title', 'Lista Facultades')
@section('content')

<section class="content">

    <div class="recent--patientslf">
        <div class="title">
            <h2 class="section--title">LISTA DE FACULTADES</h2>
            <a href="/crear-facultades" class="add"><i class="ri-add-line"></i>Nueva facultad</a>
            <!-- <button class="add"><a href="/crear-usuario"><i class="ri-add-line"></i></a>Nuevo usuario</button> -->
        </div>
        <div class="tableslf">
            <table>
                <thead>
                    <tr>
                        <th>Facultad</th>
                        <th>Carrera</th>
                        <th>Asignatura</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($faculties as $faculty)
                        
                        <tr>
                            <td data-label="Facultad">{{ $faculty->career->faculty->name }}</td>
                            <td data-label="Carrera">{{ $faculty->career->name }}</td>
                            <td data-label="Asignatura">{{ $faculty->name }}</td>
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
                                        <form action="{{ route('delete_faculty', $faculty) }}" method="POST">
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
