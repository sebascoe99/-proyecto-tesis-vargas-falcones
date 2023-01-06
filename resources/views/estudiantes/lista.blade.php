@extends('layout.app')
@section('title', 'Crear Tutorias')
@section('content')

<section class="content">
    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-12 p-3">
            <div class="mb-3 d-flex justify-content-between">
                <h4 class="titulo">Lista de estudiantes</h4>
                <a href="javascript:history.back(-1);" style="font-size:30px; width:50px; color:#000">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
            </div>   

            <div>
                <form action="">
                    <input style="border-radius:5px" type="text">
                </form>
            </div>

            <div class="card mt-4">
                <form action="">
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th class="col-sm-2">Cedula</th>
                                <th class="col-sm-3">Nombre completo</th>
                                <th class="col-sm-1">Asistencia</th>
                                <th class="col-sm-1">Nota</th>
                                <th class="col-sm-2">Evaluacion</th>
                                <th class="col-sm-2">Recomendacion</th>
                                <th class="col-sm-2">Reporte</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($estudiantes as $estudiante)
                            <tr>
                                <th>{{ $estudiante->cedula }}</th>
                                <th>{{$estudiante->name}} {{$estudiante->last_name}} {{$estudiante->second_last_name}}</th>
                                <th style="text-align: center"><input type="checkbox"></th>
                                <th><input style="width: 60px" type="text" name="" id=""></th>
                                <th><input style="width: 200px" type="text" name="" id=""></th>
                                <th><input style="width: 200px" type="text" name="" id=""></th>
                                <th></th>
                            </tr>                        
                            @endforeach
                            
                        </tbody>
                    </table> 
                    <div style="display:flex; justify-content:flex-end; width:100%; padding:0;"> 
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
            
        </div>  
    </div>

</section>

@endsection