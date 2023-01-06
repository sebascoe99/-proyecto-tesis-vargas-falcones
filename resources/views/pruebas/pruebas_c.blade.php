@extends('layout.app')
@section('title', 'Crear Prueba')
@section('content')

<section class="content">
    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-10 p-3">
            <div class="mb-3 d-flex justify-content-between">
                <h4 class="titulo">PRUEBAS</h4>
                <a href="/home-pruebas-list" style="font-size:30px; width:50px; color:#000"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
            <div class="mb-2">
                <form action="" class="row g-3">
                    <div class="col-lg-6">
                        <label class="form-label" for="fecha_inicio">Fecha inicio</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                            <input type="date" class="form-control" name="fecha_inicio">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="fecha_fin">Fecha fin</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                            <input type="date" class="form-control" name="fecha_fin">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="inicio">Hora inicio</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
                            <input type="time" class="form-control" name="inicio" placeholder="Hora inicio">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="fin">Hora fin</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-clock"></i></span>
                            <input type="time" class="form-control" name="fin" placeholder="Hora fin">
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
                    <div class="col-lg-6">
                        <label class="form-label" for="nuemro_perguntas">Cantidad de preguntas</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-list-ol"></i></span>
                            <input type="number" class="form-control" name="nuemro_perguntas" placeholder="10">
                        </div>   
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="nota_final">Nota final</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-check-to-slot"></i></span>
                            <input type="number" class="form-control" name="nota_final" placeholder="10">
                        </div>   
                    </div>
                    <button type="button" class="btn btn-primary btn-lg">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection