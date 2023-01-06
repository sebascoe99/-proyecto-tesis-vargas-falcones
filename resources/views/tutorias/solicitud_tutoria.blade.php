@extends('layout.app')
@section('title', 'Solicitud Tutoria')
@section('content')

<section class="content">
    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-10 p-3">
            <!-- <div class="mb-3 text-center">
                <h4 class="titulo">SOLICITUD TUTORIA</h4>
            </div> -->
            <div class="mb-3 d-flex justify-content-between">
                <h4 class="titulo">SOLICITAR TUTORIA</h4>
                <a href="/home-tutorias-buscar" style="font-size:30px; width:50px; color:#000"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
            <div class="mb-2">
                <form action="" class="row g-3">
                    <div class="col-lg-9">
                        <label class="form-label" for="perfil">Tutoria</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-book-open"></i></span>
                            <select class="form-select perfil-select" name="tutoria">
                                <option selected>Selecciona tutoria</option>
                                <option value="1">Desarrollo de istema web</option>
                                <option value="2">Desarrollo de app movil</option>
                                <option value="3">Ciencias de filosofia</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" for="cupos">Cupos disponibles</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-users"></i></span>
                            <input type="number" class="form-control" name="cupos" placeholder="10" readonly="true">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="nombre">Nombre</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="number" class="form-control" name="nombre" placeholder="Nombre">
                        </div>   
                    </div>
                    <div class="col-lg-12">
                        <label for="descripcion">Descripción</label>
                        <div class="input-group">
                            <textarea class="form-control" placeholder="Descripción" id="descripcion" name="descripcion" style="height: 100px"></textarea>
                        </div>
                        
                    </div>
                    <div class="col-lg-12">
                        <label for="formFileMultiple" class="form-label">Subir archivo</label>
                        <div class="input-group">
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection