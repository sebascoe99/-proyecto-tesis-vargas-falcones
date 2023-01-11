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

<div class="col-md-12 text-center"><h3>Listado de Tutorias</h3></div>
<form action="/filtrarTutorias" method="POST" class="row g-3">
  @csrf
      <div class="col-md-4">
          <div class="input-group">
              <span class="input-group-text"><i class="fa-solid fa-building-columns"></i></span>
              <input type="text" class="form-control" placeholder="Tema" name="tema">
          </div>
      </div>
      <div class="col-md-8">
          <div class="input-group">
          </div>
      </div>
      <div class="col-md-4">
          <div class="input-group">
              <span class="input-group-text"><i class="fa-solid fa-building-columns"></i></span>
              <select class="form-select perfil-select" id="asignatura" name="asignatura_id" disabled>
                  <option selected>Selecciona Asignatura</option>
                  <option value="asignatura1">Asignatura 1</option>
                  <option value="asignatura2">Asignatura 2</option>
                  <option value="asignatura3">Asignatura 3</option>
                  {{-- @foreach ($faculties as $faculty) 
                      <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                   @endforeach --}}
              </select>
          </div>
      </div>
      <div class="col-md-8">
          <div class="input-group">
          </div>
      </div>
      <div class="col-lg-4">
          <div class="input-group">
              <span class="input-group-text"><i class="fa-solid fa-book-open-reader"></i> </span>
              <select class="form-select perfil-select" id="carrera" name="career_id">
              <option value="carrera1">Carrera 1</option>
              <option value="carrera2">Carrera 2</option>
              <option value="carrera3">Carrera 3</option>
              {{-- @foreach ($careers as $career)
                      <option value="{{ $career->id }}">{{ $career->name }}</option>
                  @endforeach --}}
              </select>
          </div>
      </div>

      <button type="button" class="btn btn-primary btn-lg">GUARDAR</button>
  </form>
<div class="table-responsive-lg tables">
    <table class="table table-lg ">
      <thead>
        <tr class="table-style">
            <th>Carrera</th>
            <th>Asignatura</th>
            <th>Semestre</th>
            <th>Tutor</th>
            <th>Tema</th>
            <th>Horarios</th>
            <th>Estudiantes maximo</th>
            <th>Estudiantes existentes</th>
            <th>Periodo Lectivo</th>
            <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach ($tutorias as $tutoria) 
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
        @endforeach --}}
        <tr>
            <td data-label="Carrera">Carrera1</td>
            <td data-label="Asignatura">Asignatura1</td>
            <td data-label="Semestre">Semestre1</td>
            <td data-label="Tutor">Tutor1</td>
            <td data-label="Tema">Tema1</td>
            <td data-label="Horarios">Horarios</td>
            <td data-label="Estudiantes maximo">EstuadiantesM1</td>
            <td data-label="Estudiantes existentes">EstudiantesE1</td>
            <td data-label="Periodo lectivo">Periodo1</td>
          <td class="acciones">
            <span>
              <a href="/tutoria-tutor/1"><i class="fa-solid fa-eye view"></i></a>
            </span>
            <span>
              <a href="/tutoria-editar/1"><i class="fa-solid fa-pen-to-square edit"></i></a>
            </span>
            <span class="borrar">
              <a href="/tutoria-eliminar/1"><i class="fa-solid fa-trash-can delete"></i></a>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</section>

@endsection

