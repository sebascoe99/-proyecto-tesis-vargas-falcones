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
    <a class="btn btn-primary" type="button" href="{{ route('asignaturas.create') }}"><span><i class="fa-solid fa-plus"></i></span></a>
  </div>
</div>

<div class="table-responsive-lg tables">
    <table class="table table-lg">
      <thead>
        <tr class="table-style">
          <th>Facultad</th>
          <th>Carrera</th>
          <th>Asignatura</th>
          <th>Tutor</th>
          <th>Ciclo</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($asignaciones as $asignacion)
        <tr>
          <td data-label="Facultad">{{ $asignacion->name_faculty }}</td>
          <td data-label="Carrera">{{ $asignacion->name_career }}</td>
          <td data-label="Asignatura">{{ $asignacion->name_course }}</td>
          <td data-label="Tutor">{{ $asignacion->name_tutor }} {{ $asignacion->last_name_tutor }}</td>
          <td data-label="Ciclo">{{ $asignacion->cicle_name }}</td>

          <td class="acciones">
            <span>
              <a href="{{ route('asignaturas.edit', $asignacion->id) }}" class="fa-solid fa-pen-to-square edit"></a>
            </span>
            <span class="borrar">
              <a href="{{ route('asignaturas.destroy', $asignacion->id) }}" class="fa-solid fa-trash-can delete"></a>
            </span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</section>

@endsection
