<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Validator;
use DB;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.usuario.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataTable()
    {
        $usuarios = DB::table('persona')
            ->join('usuario', 'usuario.persona_id', 'persona.persona_id')
            ->get();
        return Datatables::of($usuarios)
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
        $rules = array(
            'usuario' => 'required',
            'password' => 'required',
            'persona_id' => 'required',
            'habilitado' => 'required',
        );
        $messages = [
            'usuario.required' => "El campo es usuario requerido",
            'password.required' => "El campo es contraseña requerido",
            'habilitado.required' => "El campo es habilite o deshabilite requerido",
        ];
        $error = Validator::make($request->all(), $rules, $messages);
        if ($error->errors()->all()) {
            return response()->json([
                'status' => 'errors',
                'message' => $error->errors()->all(),
            ]);
        }
        $insert_usuario = DB::table('personal')->insertGetId([
            'usuario' => $request->usuario,
            'password' => $request->usuario,
            'persona_id' => $request->persona_id,
            'habilitado' => $request->habilitado,
        ]);
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
