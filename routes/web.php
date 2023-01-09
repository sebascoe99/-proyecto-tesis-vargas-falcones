<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Tutor\TutoriaAccionesController;
use App\Http\Controllers\Tutor\TutoriaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function(){
    $auth = Auth::user();
    return view('dashboard.dashboard', compact('auth'));
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


Route::get('/listar-tutorias', [TutoriaController::class, 'index']);
Route::get('/tutoria-tutor/{id}', [TutoriaController::class, 'show']);
// Route::get('/tutoria-editar', [TutoriaController::class, 'index']);
// Route::get('/tutoria-eliminar', [TutoriaController::class, 'index']);


Route::get('/home-perfil', function () {
    return view('perfil.ver_perfil');
});

Route::get('/lista_asignaturas', function () {
    return view('asignaturas.asignaturas_lista');
});

Route::get('/asignaturas_crear', function () {
    return view('asignaturas.asignaturas_crear');
});

Route::get('/crear_usuarios', function () {
    return view('usuarios.crear_usuarios');
});

Route::get('/crear-tutorias', function () {
    return view('usuarios.tutorias_crear');
});

Route::get('/asignacion', [AdminController::class, 'index']);
Route::get('/search-careers/{id}', [AdminController::class, 'getCareersByFaculty']);
Route::get('/docentes', [AdminController::class, 'getTutors']);

//Se agrega un comentario cualquiera xd

Route::get('/lista-usuarios-tutoria/{id}', [TutoriaAccionesController::class, 'listaEstudiantes']);
