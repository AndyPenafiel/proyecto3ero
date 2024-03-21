<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrdenesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jornadas=DB::select("SELECT * FROM jornadas");
        $periodos=DB::select("SELECT * FROM aniolectivo");
        $meses=$this->meses();

        return view('ordenes.index')
        ->with('meses', $meses)
        ->with('jornadas', $jornadas)
        ->with('periodos', $periodos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function meses(){
        return [
            "1" => "Enero",
            "2" => "Febrero",
            "3" => "Marzo",
        ];
    }

    public function generarOrdenes(Request $rq){
        $datos=$rq->all();
        $anl_id=$datos["anl_id"];
        $jornada=$datos["jor_id"];
        $mes=$datos["mes"];
        $estudiantes=DB::select("SELECT * FROM matriculas m
                                JOIN estudiantes e ON m.est_id=e.id
                                WHERE m.anl_id=$anl_id and m.mat_estado=1");

        dd($estudiantes);
    }
}