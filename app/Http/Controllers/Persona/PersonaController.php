<?php

namespace App\Http\Controllers\Persona;

use App\Http\Controllers\Controller;
use DataTables;
use DB;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = DB::table('persona')
            ->select(
                'persona.*',
                'pais.nombre as nombre_pais',
                'pais.codigo as codigo_pais',
                'estado.nombre as nombre_estado',
                'estado.codigo as codigo_estado'
            )
            ->where('estado', '1')
            ->join('pais', 'pais.pais_id', 'persona.pais_id')
            ->join('estado', 'estado.pais_id', 'pais.pais_id')
            ->get();
        return Datatables::of($personas)
            ->addIndexColumn()
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        DB::table('persona')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insertPersona = DB::table('persona')->insertGetId([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'direccion' => $request->direccion,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'nro_identidad' => $request->nro_identidad,
            'estado' => 1,
            'tipo_documento_id' => $request->tipo_documento_id,
            'pais_id' => $request->pais_id,
        ]);
        $insert = DB::table('usuario')->insertGetId([
            'usuario' => trim(str_replace(' ', '', $request->apellido)) . $insertPersona,
            'password' => $request->password,
            'persona_id' => $insertPersona,
            'habilitado' => 0,
        ]);
        return response()->json([
            "status" => "ok",
            "message" => 'Registrado correctamente',
            "data" => $insertPersona,
        ], 200);
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
