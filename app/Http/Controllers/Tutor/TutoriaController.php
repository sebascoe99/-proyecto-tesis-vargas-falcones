<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\DocenteTutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TutoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario_id = Auth::user()->persona_id;        
        $docente = DocenteTutor::where('persona_id', $usuario_id)->get();
        
        foreach ($docente as $value) {
            $docente_id  = $value->id;
        }

        // dump($docente_id);

        $tutorias = DB::select('SELECT t.*, 
            c.nombre as carrera, 
            f.nombre facultad, 
            s.nombre as semestre, 
            asig.nombre as asignatura
        FROM `tutoria` t , `asignacion` a
        INNER JOIN `carrera` c ON c.id = a.carrera_id
        INNER JOIN `facultad` f ON f.id = a.facultad_id
        INNER JOIN `semestre` s ON s.id = a.semestre_id
        INNER JOIN `asignatura` asig ON asig.id = a.asignatura_id
        WHERE t.docente_id = ?', array($docente_id));

        // dump($tutorias);

        return view('tutorias.tutorias_lista', compact('tutorias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::select('SELECT t.*, 
                        c.nombre as carrera, 
                        f.nombre facultad, 
                        s.nombre as semestre, 
                        asig.nombre as asignatura,
                        p.nombre as periodo,
                        dt.titulo,
                        per.*
                    FROM `tutoria` t , `asignacion` a
                    INNER JOIN `carrera` c ON c.id = a.carrera_id
                    INNER JOIN `facultad` f ON f.id = a.facultad_id
                    INNER JOIN `semestre` s ON s.id = a.semestre_id
                    INNER JOIN `asignatura` asig ON asig.id = a.asignatura_id
                    INNER JOIN `docente_tutor_asignacion` dta ON dta.asignacion_id = a.id
                    INNER JOIN `periodo_lectivo` p ON p.id = dta.periodo_id
                    INNER JOIN `docente_tutor` dt ON dt.id = dta.docente_id 
                    INNER JOIN `persona` per ON per.id = dt.persona_id
                    WHERE t.id = ?', array($id));


        $users = DB::select('SELECT p.* 
                        FROM `persona` p
                        INNER JOIN `estudiante` e ON e.id = p.id
                        INNER JOIN `estudiante_tutoria` et ON et.estudiante_id = e.id
                        INNER JOIN `tutoria` t ON t.id = et.tutoria_id
                        WHERE t.id = ?', array($id));
        // dump($users);
        return  view('tutorias.tutoria_tutor', compact('data','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
