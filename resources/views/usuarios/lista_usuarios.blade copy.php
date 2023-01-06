@extends('layout.app')
@section('title', 'Lista de usuarios')
@section('content')

<section class="content">

    <div class="recent--patientslu">
        <div class="title">
            <h2 class="section--title">LISTA DE USUARIOS</h2>
            <a href="/crear-usuarios" class="add"><i class="ri-add-line"></i>Nuevo usuario</a>
            <!-- <button class="add"><a href="/crear-usuario"><i class="ri-add-line"></i></a>Nuevo usuario</button> -->
        </div>
        <div class="tableslu">
            <table>
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cedula</th>
                        <th>Usuario</th>
                        <th>Correo</th>                        
                        <th>Perfil</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $key => $user)
                    <tr>
                        <td data-label="#">{{ $key + 1 }}</td>
                        <td data-label="Nombres">{{ $user->name }}</td>
                        <td data-label="Apellidos">{{ $user->last_name }}</td>
                        <td data-label="Cedula">{{ $user->identification }}</td>
                        <td data-label="Usuario">{{ $user->username }}</td>
                        <td data-label="Correo">{{ $user->email }}</td>                        
                        <td data-label="Perfil">{{ $user->rol->name }}</td>
                        <td>
                            {{-- <span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span> --}}
                            <div class="row">
                                <div class="col-sm-6">
                                    <form action="" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-primary btn-sm ri-edit-line edit" type="submit"></button>
                                    </form>
                                </div>
                                <div class="col-sm-6" style="padding-left: 0%">
                                    <form action="{{ route('delete_user', $user) }}" method="POST">
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

