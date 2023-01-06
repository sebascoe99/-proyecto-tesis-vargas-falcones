<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TutoriaAccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listaEstudiantes($id)
    {
        $estudiantes = DB::select('SELECT p.*
                        FROM `persona` p
                        INNER JOIN `estudiante` e ON p.id = e.persona_id
                        INNER JOIN `estudiante_tutoria` et ON e.id = et.estudiante_id
                        WHERE et.tutoria_id = ?', [$id]);

        // dump($estudiantes);
        
        return view('estudiantes.lista', compact('estudiantes'));
    }
    
}
