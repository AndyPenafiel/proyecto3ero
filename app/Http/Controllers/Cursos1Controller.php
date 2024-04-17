<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cursos;
use App\Exports\CursosExport;
use Maatwebsite\Excel\Facades\Excel;


class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //para listar los datos
        $cursos=Cursos::all();
        return view('cursos.index')
        ->with('cursos',$cursos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //para mostrar la vista de resgistro nuevo
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //para guardar los datos de un nuevo registro 
        $input=$request->all();
        Cursos::create($input);
        return redirect(route('cursos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //opcional (para mostrar datos)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($cur_id)
    {
        // Obtener el curso con el ID proporcionado
        $curso = Cursos::find($cur_id);
        // Mostrar la vista de edición con los datos del curso
        return view('cursos.edit', ['curso' => $curso]);
    }
    

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, $cur_id)
{
    // Actualizar datos
    $input = $request->all();
    
    // Encuentra el curso por ID
    $curso = Cursos::find($cur_id);

    // Actualiza los datos del curso con la información del formulario
    $curso->update($input);

    // Redirecciona a la lista de cursos después de la actualización
    return redirect()->route('cursos.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cur_id)
    {
        //para elminar datos
        // dd('listo para eliminar');
        $curso = Cursos::find($cur_id);
        $curso->delete();
        return redirect()->route('cursos.index');
    }

    public function exportarCursos()
{
    return Excel::download(new CursosExport, 'cursos.xlsx');
}

}
