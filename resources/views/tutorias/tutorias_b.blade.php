@extends('layout.app')
@section('title', 'Buscar tutoria')
@section('content')

<section class="content">
<div class="d-flex justify-content-end mt-4">
  <div class="card-table col-sm-12 p-1">
    <form action="" class="row g-3">
        <div class="col-lg-12">
            <!-- <label class="form-label" for="perfil">Perfil</label> -->
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-book-open-reader"></i></span>
                <select class="form-select perfil-select" name="carrera">
                    <option selected>Selecciona carrera</option>
                    <option value="2">Sistemas</option>
                    <option value="3">Civil</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- <label class="form-label" for="perfil">Estado</label> -->
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-book"></i></span>
                <select class="form-select perfil-select" name="asignatura">
                    <option selected>Selecciona asignatura</option>
                    <option value="1">Desarrollo web</option>
                    <option value="2">Desarrollo movil</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- <label class="form-label" for="perfil">Estado</label> -->
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-chalkboard-user"></i></span>
                <select class="form-select perfil-select" name="docente">
                    <option selected>Selecciona docente</option>
                    <option value="1">Ing Rafael Marin</option>
                    <option value="2">Ing Jhon Obando</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- <label class="form-label" for="nombre">Nombre</label> -->
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="form-control" name="buscar" placeholder="Buscar...">
            </div>
        </div>
        <div class="col-lg-6">
            <button class="btn btn-primary btn-block" type="button">Buscar <span><i class="fa-solid fa-magnifying-glass"></i></span></button>
        </div>
    </form>
  </div>
</div>






<div class="table-responsive-lg tables">
    <table class="table table-lg">
      <thead>
        <tr class="table-style">
          <th>Carrera</th>
          <th>Asignatura</th>
          <th>Semestre</th>
          <th>Tutor</th>
          <th>Tema</th>
          <th>Horarios</th>
          <th>Estudiantes máximo</th>
          <th>Estudiantes existentes</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Ingenieria en sistemas</td>
          <td>Matemática</td>
          <td>8 semestre</td>
          <td>Ing Rafael Marin</td>
          <td>Desarrollo de sistema web para restaurante</td>
          <td>20:00 - 22:00</td>
          <td>5</td>
          <td>2</td>
          <td class="acciones">
            <span>
                <a class="btn btn-primary" type="button" href="/home-tutorias-solicitud"><b>APLICAR</b></a>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</section>

@endsection