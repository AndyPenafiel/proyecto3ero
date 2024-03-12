@extends('layouts.app')

@section('content')
<a href="{{ route('users.create') }}" class="btn btn-success btn-sm mb-2">
    <span class="material-symbols-outlined align-middle">add</span>
    <span class="align-middle">Nuevo Usuario</span>
</a>
<a href="{{ route('exportar.usuarios') }}" class="btn btn-primary btn-sm mb-2">Exportar Usuarios a Excel</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Usuario</th>
            <th>Rol</th>
            <th>Nombres</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $u)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->rol_descripcion}}</td>
                <td>{{ $u->usu_nombre }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->password }}</td>
                <td>{{ $u->usu_telefono }}</td>
                <td class="d-flex">
                    <a href="{{ route('users.edit', $u->usu_id) }}" class="btn btn-warning btn-sm me-1">
                        <span class="material-symbols-outlined">edit</span>
                    </a>
                    <form action="{{ route('users.destroy', $u->usu_id) }}" method="POST" onsubmit="return confirm('¿Desea eliminar el Curso?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection