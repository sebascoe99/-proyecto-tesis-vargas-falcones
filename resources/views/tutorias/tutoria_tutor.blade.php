@extends('layout.app')
@section('title', 'Crear Tutorias')
@section('content')

<section class="content">
    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-12 p-3">
            <div class="mb-3 d-flex justify-content-between">
                <h4 class="titulo">DATOS DE LA TUTORIA</h4>
                <a href="{{ route('tutorias.index') }}" style="font-size:30px; width:50px; color:#000">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
            </div>
            @foreach ($data as $tutoria)

            <div class="row justify-content-md-center" style="text-align: center">
                <div class="col">
                    <h2>Tema: {{ $tutoria->tema }}</h2>
                    <h5><b>Facultad:</b> {{ $tutoria->facultad }}</h5>
                </div>
            </div>

            <div class="row mt-4 justify-content-center">
                <div class="col-md-4">
                    <label><b>Carrera:</b> {{ $tutoria->carrera }}</label>
                </div>
                <div class="col-md-4">
                    <label><b>Semestre:</b> {{ $tutoria->semestre }}</label>
                </div>
            </div>

            <div class="row mt-2 justify-content-center">
                <div class="col-md-4">
                    <label><b>Asignatura:</b> {{ $tutoria->asignatura }}</label>
                </div>
                <div class="col-md-4">
                    <label><b>Cantidad de estudiantes:</b> {{ $tutoria->cantidad_estudiantes }}</label>
                </div>
            </div>

            <div class="row mt-2 justify-content-center">
                <div class="col-md-4">
                    <label><b>Limite de estudiantes:</b> {{ $tutoria->limite_estudiantes }}</label>
                </div>
                <div class="col-md-4">
                    <label><b>Lugar:</b> {{ $tutoria->lugar }}</label>
                </div>
            </div>

            <div class="row mt-4 justify-content-center" >
                <div class="col-md-3">
                    <label><b>Fecha:</b> {{ $tutoria->fecha }}</label>
                </div>
            </div>

            <div class="row mt-2 justify-content-center">
                <div class="col-md-4">
                    <label><b>Hora de inicio:</b> {{ $tutoria->hora_inicio }}</label>
                </div>
                <div class="col-md-4">
                    <label><b>Hora de cierre:</b> {{ $tutoria->hora_cierre }}</label>
                </div>
            </div>




        </div>
    </div>

    <div class="card col-sm-12 p-2" id="acciones_tutor">
        <div class="row" >
            <div>
                <h3 style="border-bottom: 1px solid black"><b>Detalles</b></h3>
            </div>
            <div class="col-md-3">
                <a href="/lista-usuarios-tutoria/{{ $tutoria->id }}" type="button" class="justify-content-center">Listado Estudiantes</a>
            </div>
            <div class="col-md-3">
                <a href="" type="button" class="justify-content-center">Añadir Estudiante</a>
            </div>
            <div class="col-md-3">
                <a href="" type="button" class="justify-content-center">Crear Publicación</a>
            </div>
            <div class="col-md-3">
                <a href="" type="button" class="justify-content-center">Informe Final</a>
            </div>
        </div>

        {{-- <form action="">
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th class="col-sm-9">Listado</th>
                        <th class="col-sm-1">Asistencia</th>
                        <th class="col-sm-2">Reporte</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $estudiante)
                    <tr>
                        <th>{{$estudiante->name}} {{$estudiante->last_name}} {{$estudiante->second_last_name}}</th>
                        <th style="text-align: center"><input type="checkbox"></th>
                        <th><input type="text" name="" id=""></th>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <div style="display:flex; justify-content:flex-end; width:100%; padding:0;">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>


        </form> --}}
    </div>
    @endforeach

    <h3 class="mt-4" style="text-align: center"><b>Publicaciones</b></h3>
    {{-- aqui un foreach de publicaciones --}}
    <div class="card col-sm-12 p-2" id="publicaciones">
        <div style="border-bottom: 1px solid black">
            <h3><b>Titulo</b></h3>
        </div>
        <div class="row">
            <div class="col-sm-2 acciones" >
                <a href="" type="button" class="justify-content-center">Eliminar</a>
                <a href="" type="button" class="justify-content-center">Editar</a>
                <a href="" type="button" class="justify-content-center">No/Visible</a>
            </div>
            <div class="col-sm-10">
                {{-- <h4>Titulo</h4> --}}
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque amet minima magni repudiandae nihil. Molestiae error eveniet quod in perferendis eum, amet maxime rem. Dignissimos rerum in voluptates facilis tenetur!</p>
                <div class="row-md-12" id="recursos">
                    <h5>Recursos: </h5>
                    <a href="">recurso1</a>
                    <a href="">recurso2</a>
                    <a href="">recurso3</a>
                </div>
                <p class="mt-4">Fecha: 11-11-11</p>
            </div>
        </div>
    </div>

    <div class="card col-sm-12 p-2" id="publicaciones">
        <div style="border-bottom: 1px solid black">
            <h3><b>Titulo</b></h3>
        </div>
        <div class="row">
            <div class="col-sm-2 accion" >
                <a href="" type="button" class="justify-content-center">Eliminar</a>
                <a href="" type="button" class="justify-content-center">Editar</a>
                <a href="" type="button" class="justify-content-center">No/Visible</a>
            </div>
            <div class="col-sm-10">
                {{-- <h4>Titulo</h4> --}}
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quas atque modi soluta saepe quae temporibus animi, libero accusantium fugit adipisci ea porro ipsam harum enim inventore rerum aspernatur veritatis.</p>
                <div class="row-md-12" id="recursos">
                    <h5>Recursos: </h5>
                    <a href="">recurso1</a>
                    <a href="">recurso2</a>
                    <a href="">recurso3</a>
                </div>
                <p class="mt-4">Fecha: 11-11-11</p>
            </div>
        </div>
    </div>

</section>

@endsection
