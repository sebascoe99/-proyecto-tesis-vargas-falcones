<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asignatura;
use App\Models\Carrera;
use App\Models\Facultad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaciones = DB::select("SELECT tu.id, f.name name_faculty, c.name name_career, co.name name_course
                        FROM `tutorships` tu
                        INNER JOIN users u ON u.id = tu.teacher_id
                        INNER JOIN faculties f ON f.id = tu.faculty_id
                        INNER JOIN careers c ON c.id = tu.career_id
                        INNER JOIN courses co ON co.id = tu.course_id
                    ");
        return view('asignaturas.index', compact('asignaciones') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = Facultad::all('id', 'name');
        $tutors = User::where('rol_id', '2')->get();

        //$careers = Carrera::all('id', 'faculty_id', 'name');//->where('faculty_id', $id);

        return view('asignaturas.create', compact('faculties', 'tutors') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignacion = new Asignatura();
        $asignacion->teacher_id = $request->tutor;
        $asignacion->faculty_id = $request->idFacultad;
        $asignacion->career_id = $request->idCareer;
        $asignacion->course_id = $request->idCourse;
        $asignacion->theme = $request->nameCourse;
        $asignacion->save();
        //return Redirect::to('asignaturas.index')->with('notice', 'Asignación ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function show(Asignatura $asignatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignatura $asignatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignatura $asignatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignatura $asignatura)
    {
        //
    }

    /**
     * Obtiene todas las carreras relacionadas a la facultad
     */
    public function getCareersByFaculty(Request $request)
    {
        // $carreras = Carrera::all('id', 'faculty_id', 'name')->where('faculty_id', $request->id);

        $carreras = DB::select("SELECT c.id, c.faculty_id, c.name
                        FROM `careers` c
                        WHERE c.faculty_id = '$request->id' ");

        return $carreras;
    }
}
