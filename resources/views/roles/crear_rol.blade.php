@extends('layout.app')
@section('title', 'Roles')
@section('content')

<section class="content">
<div class="d-flex justify-content-center mt-4">
<div class="card col-sm-6 p-3">
    <div class="mb-3 d-flex justify-content-between">
        <h4 class="titulo">CREAR ROLES</h4>
        <a href="/listar-rol" style="font-size:30px; width:50px; color:#000"><i class="fa-solid fa-arrow-left"></i></a>
    </div>
    <div class="mb-2">
        <form method="POST" action="{{ route('create_rol') }}" class="row g-3">
            @csrf
            <div class="col-md-12">
                <label class="form-label" for="perfil">Nombre perfil</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Nombre perfil">
                </div>
                
            </div>
            <div class="col-lg-12">
                <label class="form-label" for="modulo">Descripción</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-ellipsis-vertical"></i></i></span>
                    <input type="text" class="form-control" name="description" value="{{ old('description') }}" required placeholder="Descripción del rol">
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