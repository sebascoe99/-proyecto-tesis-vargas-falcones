@extends('layout.app')
@section('title', 'Lista de roles')
@section('content')

<section class="content">

    <div class="recent--patientslf">
        <div class="title">
            <h2 class="section--title">LISTA DE ROLES</h2>
            {{-- <a href="/crear-rol" class="add"><i class="ri-add-line"></i>Nuevo Rol</a> --}}
            <!-- <button class="add"><a href="/crear-usuario"><i class="ri-add-line"></i></a>Nuevo usuario</button> -->
        </div>
        <div class="tableslf">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre perfil</th>                        
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rols as $rol)
                        <tr>
                            <td data-label="Id">{{ $rol->id }}</td>
                            <td data-label="Nombre perfil">{{ $rol->name }}</td>                            
                            <td data-label="Descripcion">{{ $rol->description }}</td>
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
                                    {{-- <div class="col-sm-6" style="padding-left: 0%">
                                        <form action="{{ route('delete_rol', $rol) }}" method="POST">
                                            @csrf             
                                            @method('delete')                               
                                            <button class="btn btn-danger btn-sm ri-delete-bin-line delete" type="submit"></button>
                                        </form>
                                    </div> --}}
                                </div>
                            </td>
                        </tr>                      
                    @endforeach

                    {{-- <tr>
                        <td data-label="Nombre perfil">Administrador</td>
                        <td data-label="Nombre del modulo">Todos</td>
                        <td data-label="Permiso por cada modulo">Todos</td>
                        <td data-label="Opciones disponibles">Todos</td>
                        <td data-label="Estado">Activo</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>                     --}}
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection

