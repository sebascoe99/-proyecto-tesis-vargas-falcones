@extends('layout.app')
@section('title', 'Lista Asignaturas')
@section('content')

<section class="content">
<div class="d-flex justify-content-end mt-4">
  <div class="card-table col-sm-6 p-1">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Buscar....">
      <button class="btn btn-primary" type="button"><span><i class="fa-solid fa-magnifying-glass"></i></span></button>
     </div>
  </div>
  <div class="card-table col-sm-0.5 p-1">
    <a class="btn btn-primary" type="button" href="/asignaturas_crear"><span><i class="fa-solid fa-plus"></i></span></a>
  </div>
</div>

<div class="table-responsive-lg tables">
    <table class="table table-lg">
      <thead>
        <tr class="table-style">
          <th>Facultad</th>
          <th>Carrera</th>
          <th>Asignatura</th>
          <th>Semestre</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      <tr>
        <td>Facultad 1</td>
        <td>Carrera 1</td>
        <td>Asignatura 1</td>
        <td>Semestre 1</td>
        <td>Acciones 1</td>
      </tr>
      <tr>
        <td>Facultad 2</td>
        <td>Carrera 2</td>
        <td>Asignatura 2</td>
        <td>Semestre 2</td>
        <td>Acciones 2</td>
      </tr>
      <tr>
        <td>Facultad 3</td>
        <td>Carrera 3</td>
        <td>Asignatura 3</td>
        <td>Semestre 3</td>
        <td>Acciones 3</td>
      </tr>
      </tbody>
    </table>
  </div>

</section>

@endsection