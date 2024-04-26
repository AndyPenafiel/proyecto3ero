<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; // Agregado para importar la clase Auth
use DB;
use App\Models\User;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios=DB::select("SELECT * FROM users"); 

        return view('usuarios.index')
        ->with('usuarios', $usuarios); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $rq)
    {
        $input=$rq->all();
        User::create($input);
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = User::find($id);
        return view('usuarios.edit')
        ->with('usuario',$usuario)
        ; 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $rq, string $id)
    {
        $input = $rq->all();
        $usuario = User::find($id);
        $usuario->update($input);
    
        return redirect()->route('usuarios.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    User::where('id', $id)->delete();

    return redirect()->route('usuarios.index');
    }

    public function buscar(Request $rq) {
        $dato=($rq->buscar);
        $usuario=DB::select("SELECT * FROM users u 
                                WHERE (UPPER(u.name) LIKE UPPER('%$dato%') OR UPPER(u.usu_apellidos) LIKE UPPER('%$dato%'))
                                order by u.usu_apellidos");
        return view('usuarios.buscar')
        ->with('usuario',$usuario)
        ;
    }

}
