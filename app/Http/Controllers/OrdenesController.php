<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; // Agregado para importar la clase Auth
use DB;
use App\Models\GeneraOrdenes;

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
        $ordenes=DB::select("SELECT secuencial, fecha_registro FROM ordenes_generadas GROUP BY secuencial, fecha_registro;");
        // $estudiantes =$this->generarOrdenes();

        return view('ordenes.index')
        ->with('meses', $meses)
        ->with('jornadas', $jornadas)
        ->with('periodos', $periodos)
        ->with('ordenes', $ordenes); // Pasa los estudiantes a la vista
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
            "4" => "Abril",
            "5" => "Mayo",
            "6" => "Junio",
            "7" => "Julio",
            "8" => "Agosto",
            "9" => "Septiembre",
            "10" => "Octubre",
            "11" => "Noviembre",
            "12" => "Diciembre",
        ];
        }

        public function mesesLetras($mes){
            $resul="";
            switch($mes) {
                case 1:$resul = "E";break;
                case 2:$resul = "F";break;
                case 3:$resul = "M";break;
                case 4:$resul = "A";break;
                case 5:$resul = "MY";break;
                case 6:$resul = "J";break;
                case 7:$resul = "JL";break;
                case 8:$resul = "AG";break;
                case 9:$resul = "S";break;
                case 10:$resul = "O";break;
                case 11:$resul = "N";break;
                case 12:$resul = "D";break;
                default:$resul = ""; // Manejar el caso por defecto si el mes no es válidobreak;
            }
            return $resul;
        }
        

    public function generarOrdenes(Request $rq){
        $datos=$rq->all();
        $anl_id=$datos["anl_id"];
        $jor_id=$datos["jor_id"];
        $mes=$datos["mes"];
        $estudiantes=DB::select("SELECT *, m.id as mat_id FROM matriculas m
                                JOIN estudiantes e ON m.est_id=e.id
                                JOIN jornadas j ON m.jor_id=j.id
                                JOIN cursos c ON m.cur_id=c.cur_id
                                JOIN especialidades es ON m.esp_id=es.id
                                WHERE m.anl_id=$anl_id and m.mat_estado=1 and m.jor_id=$jor_id");
        $valor_pagar=75;
        $nmes=$this->mesesLetras($mes);
        $campus="G";
        
        
        foreach($estudiantes as $e){ 

            $input['mat_id']=$e->mat_id;  //id de la matricula
            $input['codigo']=$nmes.$campus.$e->jor_obs.$e->cur_obs.$e->esp_obs."-".$e->mat_id;  //MGM3IF-6546
            $input['fecha_registro']=date('Y-m-d');//
            $input['valor_pagar']=$valor_pagar;
            $input['fecha_pago']=null;
            $input['valor_pagado']=0;     
            $input['estado']=0;
            $input['mes']=$mes;
            $input['responsable']=Auth::user()->username; // Aquí debes proporcionar el ID del usuario
            $input['secuencial']=1; // Asigna un valor para el secuencial
            $input['documento']=null; // Asigna un valor para el documento
            GeneraOrdenes::create($input);
            
        }
        return redirect()->route('ordenes.index');   
    }
}
