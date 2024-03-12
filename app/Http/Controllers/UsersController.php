<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use App\Models\User;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users=DB::select("
        // SELECT * FROM users u
        // JOIN roles r ON u.rol_id=r.rol_id
        // ");
        $users=DB::table('users as u')
        ->join('roles as r','u.rol_id','=','r.rol_id')
        ->select('*')
        ->get();
        // $users=User::all();
        return view('users.index')
        ->with('users',$users);//1er parametro como lo voy a llamar en la vista, 2do la variable que contiene los datos

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //para mostrar la vista de usuario nuevo
        $roles = Roles::all();
        return view('users.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        User::create($input);
        return redirect(route('users.index'));
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
    public function edit(string $usu_id)
    {
        $user = User::find($usu_id);
        $roles = Roles::all();
    
        return view('users.edit', ['user' => $user, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $usu_id)
    {
        // Actualizar datos
        $input = $request->all();
        
        // Encuentra el curso por ID
        $user = User::find($usu_id);
    
        // Actualiza los datos del curso con la información del formulario
        $user->update($input);
    
        // Redirecciona a la lista de cursos después de la actualización
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $usu_id)
    {
         //para elminar datos
        // dd('listo para eliminar');
        $users = User::find($usu_id);
        $users->delete();
        return redirect()->route('users.index');
    }
    public function exportarUsuarios()
    {
        return Excel::download(new UsersExport, 'usuarios.xlsx');
    }
}
