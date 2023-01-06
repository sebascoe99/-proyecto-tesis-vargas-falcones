@extends('layout.app')
@section('title', 'Lista Tutorias')
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
    <a class="btn btn-primary" type="button" href="/crear-tutorias"><span><i class="fa-solid fa-plus"></i></span></a>
  </div>
</div>

<div class="table-responsive-lg tables">
    <table class="table table-lg ">
      <thead>
        <tr class="table-style">
            <th>Carrera</th>
            <th>Asignatura</th>
            <th>Semestre</th>
            <th>Facultad</th>
            <th>Tema</th>
            <th>Horarios</th>
            <th>Estudiantes maximo</th>
            <th>Estudiantes existentes</th>
            <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tutorias as $tutoria)
        <tr>
            <td data-label="Carrera">{{ $tutoria->carrera }}</td>
            <td data-label="Asignatura">{{ $tutoria->asignatura }}</td>
            <td data-label="Semestre">{{ $tutoria->semestre }}</td>
            <td data-label="Facultad">{{ $tutoria->facultad }}</td>
            <td data-label="Tema">{{ $tutoria->tema }}</td>
            <td data-label="Horarios">{{ $tutoria->fecha }}</td>
            <td data-label="Estudiantes maximo">{{ $tutoria->limite_estudiantes }}</td>
            <td data-label="Estudiantes existentes">{{ $tutoria->cantidad_estudiantes }}</td>
          <td class="acciones">
            <span>
              <a href="/tutoria-tutor/{{ $tutoria->id }}"><i class="fa-solid fa-eye view"></i></a>
            </span>
            <span>
              <a href="/tutoria-editar"><i class="fa-solid fa-pen-to-square edit"></i></a>
            </span>
            <span class="borrar">
              <a href="/tutoria-eliminar"><i class="fa-solid fa-trash-can delete"></i></a>
            </span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</section>

@endsection