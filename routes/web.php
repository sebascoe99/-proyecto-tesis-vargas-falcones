<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AsignaturaController;
use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Tutor\TutoriaAccionesController;
use App\Http\Controllers\Tutor\TutoriaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login.login');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', function(){
        $auth = Auth::user();
        return view('dashboard.dashboard', compact('auth'));
    })->middleware(['auth'])->name('dashboard');

    //Route::get('/tutorias', [TutoriaController::class, 'index'])->name('tutorias.index');
    Route::get('/tutoria-tutor/{id}', [TutoriaController::class, 'show']);
    // Route::get('/tutoria-editar', [TutoriaController::class, 'index']);
    // Route::get('/tutoria-eliminar', [TutoriaController::class, 'index']);


    Route::get('/perfil', function () {
        return view('perfil.index');
    })->name('perfil.index');

    Route::get('/tutorias', function () {
        return view('tutorias.index');
    })->name('tutorias.index');

    Route::get('/crear-tutorias', function () {
        return view('tutorias.tutorias_crear');
    })->name('tutorias.tutorias_crear');

    Route::get('/asignaturas', [AsignaturaController::class, 'index'])->name('asignaturas.index');

    Route::post('/asignar', [AsignaturaController::class, 'store'])->name('asignaturas.store');

    Route::get('/asignaturas/crear', [AsignaturaController::class, 'create'])->name('asignaturas.create');

    Route::post('/asignaturas/search-careers', [AsignaturaController::class, 'getCareersByFaculty'])->name('asignaturas.search');

    Route::post('/cursos/search-course', [CursoController::class, 'getCoursesByCareer'])->name('cursos.search');

    // Route::get('/asignaturas/crear', function () {
    //     return view('asignaturas.create');
    // });




    Route::get('/crear_usuarios', function () {
        return view('usuarios.crear_usuarios');
    });


    //Route::get('/asignacion', [AdminController::class, 'index']);
    Route::get('/docentes', [AdminController::class, 'getTutors']);

    //Se agrega un comentario cualquiera xd

    Route::get('/lista-usuarios-tutoria/{id}', [TutoriaAccionesController::class, 'listaEstudiantes']);

});

