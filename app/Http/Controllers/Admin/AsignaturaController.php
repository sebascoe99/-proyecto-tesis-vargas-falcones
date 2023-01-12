<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asignacion;
use App\Models\Asignatura;
use App\Models\Cicle;
use App\Models\Facultad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $asignaciones = DB::select("SELECT tu.id, f.name name_faculty, c.name name_career, co.name name_course
        //                 FROM `tutorships` tu
        //                 INNER JOIN users u ON u.id = tu.teacher_id
        //                 INNER JOIN faculties f ON f.id = tu.faculty_id
        //                 INNER JOIN careers c ON c.id = tu.career_id
        //                 INNER JOIN courses co ON co.id = tu.course_id
        //             ");

        $asignaciones = DB::select("SELECT ct.id, ci.name cicle_name, u.name name_tutor, u.last_name last_name_tutor,
                                    co.name name_course, c.name name_career, f.name name_faculty
                        FROM `course_tutor` ct
                        INNER JOIN users u ON u.id = ct.id_user
                        INNER JOIN cicle ci ON ci.id = ct.id_cicle
                        INNER JOIN courses co ON co.id = ct.id_course
                        INNER JOIN careers c ON c.id = co.career_id
                        INNER JOIN faculties f ON f.id = c.faculty_id
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
        $cicles = Cicle::where('status', '1')->get();

        //$careers = Carrera::all('id', 'faculty_id', 'name');//->where('faculty_id', $id);

        return view('asignaturas.create', compact('faculties', 'tutors', 'cicles') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'tutor' => ['required'],
            'name_course' => ['required'],
            'period' => ['required']
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate->errors());
        }

        $asignacion = new Asignacion();
        $asignacion->id_user = $request->tutor;
        $asignacion->id_course = $request->name_course;
        $asignacion->id_cicle = $request->period;
        $asignacion->status = 1;
        $asignacion->save();

        return redirect()->route('asignaturas.create')->with('msg', 'Asignación creada correctamente');
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
    public function edit(Request $request)
    {
        
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
