<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrera;
use App\Models\Facultad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultades = Facultad::all('id', 'name');

        $data = array(
            'message' => 'success',
            'status' => '200',
            'data' => $facultades
        );

        return $data;
    }

    /**
     * Obtiene todas las carreras relacionadas a la facultad
     */
    public function getCareersByFaculty($id)
    {
        if(!isset($id) || !is_numeric($id)){
            $data = array(
                'message' => 'error',
                'status' => '500',
                'data' => []
            );
            return $data;
        }

        $carreras = Carrera::all('id', 'faculty_id', 'name')->where('faculty_id', $id);

        $data = array(
            'message' => 'success',
            'status' => '200',
            'data' => $carreras
        );
        return $data;
    }

    /**
     * Listar todos los docentes
     */

     public function getTutors(){
        //$docentes = User::all('id', 'name', 'last_name', 'identification', 'email', 'rol_id')->where('rol_id', 2);

        $docentes = DB::select('SELECT u.id, u.name, u.last_name, u.identification, u.email
                        FROM `users` u
                        WHERE u.rol_id = 2');

        $data = array(
            'message' => 'success',
            'status' => '200',
            'date' => $docentes
        );
        return $data;
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
        //
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
