<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Rol::factory(10)->create();

        // // roles de usuarios
        \App\Models\Rol::create([
            'descripcion' => 'Administrador',            
        ]);

        \App\Models\Rol::create([
            'descripcion' => 'Tutor',            
        ]);

        \App\Models\Rol::create([
            'descripcion' => 'Estudiante',            
        ]);

        // // estado de usarios
        \App\Models\Estado::create([
            'descripcion' => 'Activo',            
        ]);

        \App\Models\Estado::create([
            'descripcion' => 'Inactivo',            
        ]);

        // personas
        \App\Models\Persona::create([
            'cedula' => '0923281570',
            'name' => 'Steeven',
            'last_name' => 'Falcones',
            'second_last_name' => '',
            'fecha_nacimiento' => date('Y-m-d')
        ]);

        \App\Models\Persona::create([
            'cedula' => '0923281571',
            'name' => 'Omar',
            'last_name' => 'Falcones',
            'second_last_name' => '',
            'fecha_nacimiento' => date('Y-m-d')
        ]);

        \App\Models\Persona::create([
            'cedula' => '0923281572',
            'name' => 'Steeven',
            'last_name' => 'Falcones',
            'second_last_name' => '',
            'fecha_nacimiento' => date('Y-m-d')
        ]);

        // usuarios 
        \App\Models\User::create([
            'persona_id' => '1',
            'username' => 'profesor',
            'email' => 'jose_asencio13@hotmail.com',
            'password' => Hash::make('password'),
            'estado_id' => '1',
            'rol_id' => '2',
            'ruta_imagen' => 'default.png'
        ]);

        \App\Models\User::create([
            'persona_id' => '2',
            'username' => 'estudiante',
            'email' => 'jose_asencio13@hotmail.com',
            'password' => Hash::make('password'),
            'estado_id' => '1',
            'rol_id' => '3',
            'ruta_imagen' => 'default.png'
        ]);

        \App\Models\User::create([
            'persona_id' => '3',
            'username' => 'estudiante1',
            'email' => 'jose_asencio13@hotmail.com',
            'password' => Hash::make('password'),
            'estado_id' => '1',
            'rol_id' => '3',
            'ruta_imagen' => 'default.png'
        ]);

        // Docente Tutor
        \App\Models\DocenteTutor::create([
            'persona_id' => '1',
            'titulo' => 'Ingeniero en Sistemas Computacionales',            
        ]);


        // Carreras
        \App\Models\Carrera::create([
            'nombre' => 'Ingenieria en Software',
            'estado_id' => '1',            
        ]);

        
        // Semestre
        \App\Models\Semestre::create([
            'nombre' => 'Primer Semestre',
            'estado_id' => '1',            
        ]);

        
        // Asignatura
        \App\Models\Asignatura::create([
            'nombre' => 'Matematicas I',
            'estado_id' => '1',            
        ]);


        // Facultad
        \App\Models\Facultad::create([
            'codigo_facultad' => '001',
            'nombre' => 'Ciencias Matematicas y Fisicas',
            'estado_id' => '1',            
        ]);


        // Asignacion
        \App\Models\Asignacion::create([
            'facultad_id' => '1',
            'carrera_id' => '1',
            'semestre_id' => '1',
            'asignatura_id' => '1',
            'estado_id' => '1',            
        ]);


        // Periodo Lectivo
        \App\Models\PeriodoLectivo::create([
            'nombre' => 'Primer Parcial',
            'estado_id' => '1',            
        ]);


        // Estudiante
        \App\Models\Estudiante::create([
            'persona_id' => '2',
            'carrera_id' => '1',
            'semestre_id' => '1',
            'periodo_lectivo_id' => '1',
        ]);
        \App\Models\Estudiante::create([
            'persona_id' => '3',
            'carrera_id' => '1',
            'semestre_id' => '1',
            'periodo_lectivo_id' => '1',
        ]);


        // Docente Tutor Asignacion
        \App\Models\DocenteTutorAsignacion::create([
            'docente_id' => '1',
            'asignacion_id' => '1',
            'periodo_id' => '1',            
        ]);


        // Tipo Documento
        \App\Models\TipoDocumento::create([
            'descripcion' => 'Archivo PDF'          
        ]);


        // Estado de publicacion
        \App\Models\EstadoPublicacion::create([
            'descripcion' => 'Activo',            
        ]);

        \App\Models\EstadoPublicacion::create([
            'descripcion' => 'Inactivo',            
        ]);


        // Recursos
        \App\Models\Recurso::create([
            'nombre' => 'Primer Parcial',
            'ubicacion' => '1',
            'tamanio' => '1',
            'tipo_documento_id' => '1',
            'estado_publicacion_id' => '1',
        ]);


        // Motivo Tutoria
        \App\Models\MotivoTutoria::create([            
            'descripcion' => 'Es una tutoria de practica',
        ]);


        // Tutoria
        \App\Models\Tutoria::create([
            'docente_id' => '1',
            'asignacion_tutor_id' => '1',
            'motivo_id' => '1',
            'tema' => 'Introduccion',
            'lugar' => 'Aula 201',
            'fecha' => date('Y-m-d'),
            'hora_inicio' => now()->toTimeString(),
            'hora_cierre' => now()->toTimeString(),
            'cantidad_estudiantes' => 50,
            'limite_estudiantes' => 100,
            'asignacion_id' => '1' 
        ]);

        \App\Models\Tutoria::create([
            'docente_id' => '1',
            'asignacion_tutor_id' => '1',
            'motivo_id' => '1',
            'tema' => 'Primera',
            'lugar' => 'Aula 202',
            'fecha' => date('Y-m-d'),
            'hora_inicio' => now()->toTimeString(),
            'hora_cierre' => now()->toTimeString(),
            'cantidad_estudiantes' => 50,
            'limite_estudiantes' => 100,
            'asignacion_id' => '1' 
        ]);

        // Publicacion
        \App\Models\Publicacion::create([
            'tutoria_id' => '1',
            'titulo' => 'Tarea 1',
            'fecha' => date('Y-m-d'),
            'hora' => now()->toTimeString(),
            'descripcion' => 'Es la primera tarea',
        ]);


        // Recursos Publicaciones
        \App\Models\RecursoPublicacion::create([            
            'recurso_id' => '1',
            'publicacion_id' => '1',
        ]);


        // Estudiante Tutoria
        \App\Models\EstudianteTutoria::create([
            'tutoria_id' => '1',
            'estudiante_id' => '1',
            'asistencia' => '1',
            'nota' => 2.5,
            'evaluacion' => 6,
            'recomendacion' => 'recomendaciones',
        ]);
        \App\Models\EstudianteTutoria::create([
            'tutoria_id' => '1',
            'estudiante_id' => '2',
            'asistencia' => '1',
            'nota' => 2.5,
            'evaluacion' => 6,
            'recomendacion' => 'recomendaciones',
        ]);


    }
}
