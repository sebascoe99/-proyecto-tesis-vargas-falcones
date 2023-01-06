@extends('layout.app')
@section('title', 'Crear Facultades')
@section('content')

<section class="content">
<div class="d-flex justify-content-center mt-4">
<div class="card col-sm-6 p-3">
    <div class="mb-3 d-flex justify-content-between">
                <h4 class="titulo">CREAR FACULTADES</h4>
                <a href="/listar-facultades" style="font-size:30px; width:50px; color:#000"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
    <div class="mb-2">
        <form method="POST" action="{{ route('create_faculty') }}" class="row g-3">
        @csrf
            <div class="col-md-12">
                <label class="form-label" for="facultad">Facultad</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-building-columns"></i></span>
                    <input type="text" class="form-control" name="name" value="{{ old('faculty') }}" required placeholder="Facultad">
                </div>
                
            </div>
            <div class="col-lg-12">
                <label class="form-label" for="carrera">Carrera</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-book-open-reader"></i></span>
                    <input type="text" class="form-control" name="race" value="{{ old('race') }}" required placeholder="Carrera">
                </div>
                
            </div>
            <div class="col-lg-12">
                <label class="form-label" for="asignatura">Asignatura</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-book"></i></span>
                    <input type="text" class="form-control" name="course" value="{{ old('course') }}" required placeholder="Asignatura">
                </div>
                
            </div>
            
            <button type="button" class="btn btn-primary btn-lg">GUARDAR</button>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </form>
    </div>
</div>
</div>
</section>
@endsection