@extends('layout.app')
@section('title', 'Actividades calificacion manual')
@section('content')

<section class="content">
    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-10 p-3">
            <div class="mb-3 d-flex justify-content-between">
                <h4 class="titulo">CREAR ACTIVIDAD MANUAL</h4>
                <a href="#" style="font-size:30px; width:50px; color:#000"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
            <div class="mb-2">
                <form action="" class="row g-3">
                    <div class="col-lg-10">
                        <label class="form-label" for="actividad">Nombre de la actividad</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-folder"></i></span>
                            <input type="text" class="form-control" name="actividad" placeholder="Nombre de la actividad">
                        </div>   
                    </div>
                    <div class="col-lg-2">
                        <label class="form-label" for="nota">Nota</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-check-to-slot"></i></span>
                            <input type="number" class="form-control" name="nota" placeholder="10">
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