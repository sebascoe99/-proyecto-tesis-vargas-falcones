@extends('layout.app')
@section('title', 'Lista de usuarios')
@section('content')

<section class="content">
<div class="d-flex justify-content-end mt-4">
  <div class="card-table col-sm-12 p-1">
    <form action="" class="row g-3">
        <div class="col-lg-3">
            <!-- <label class="form-label" for="perfil">Perfil</label> -->
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                <select class="form-select perfil-select" name="perfil">
                    <option selected>Selecciona perfil</option>
                    <option value="2">Tutor</option>
                    <option value="3">Estudiante</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <!-- <label class="form-label" for="perfil">Estado</label> -->
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                <select class="form-select perfil-select" name="perfil">
                    <option selected>Selecciona estado</option>
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                </select>
            </div>
        </div>
        <div class="col-lg-5">
            <!-- <label class="form-label" for="nombre">Nombre</label> -->
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
        </div>
        <div class="col-lg-1">
          <button class="btn btn-primary btn-block" type="button"><span><i class="fa-solid fa-magnifying-glass"></i></span></button>
        </div>
    </form>
  </div>  
</div>
<div class="card-table col-sm-0.5 p-1">
    <a class="btn btn-primary" type="button" href="/crear-usuarios"><span><i class="fa-solid fa-plus"></i></span></a>
</div>
<div class="table-responsive-lg tables">
    <table class="table table-lg">
      <thead>
        <tr class="table-style">
            <th style="width: 10px">#</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cedula</th>
            <th>Usuario</th>
            <th>Correo</th>                        
            <th>Perfil</th>
            <th>Acciones</th>
            <th>Acciones2.0</th>
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
            <td class="acciones">
                <span>
                <i class="fa-solid fa-pen-to-square edit"></i>
                </span>
                <span class="borrar">
                <i class="fa-solid fa-trash-can delete"></i>
                </span>
            </td>
            <td class="acciones">
              <a href="#" >
                <span>
                  <i class="fa-solid fa-pen-to-square edit"></i>                
                </span>
              </a>
             
              <form action="{{ route('delete_user', $user) }}" method="POST" style="display: inline;">
                @csrf             
                @method('delete')                               
                <button class="borrar" type="submit" style="background: none; border:0;">
                  <span>
                    <i class="fa-solid fa-trash-can delete"></i>
                  </span>
                </button>                
              </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</section>

@endsection