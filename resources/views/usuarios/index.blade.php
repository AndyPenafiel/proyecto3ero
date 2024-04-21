@php
$contador = 1;
@endphp
@extends('layouts.app')

@section('content')
<form method="POST" class="d-flex" role="search" action="{{ route('buscar_usuarios')}}">
    @csrf
    <div class="d-flex"> <!-- Agregado div para flexibilidad -->
        <input class="form-control me-2 col-12" type="search" placeholder="Buscar" aria-label="Search" name="buscar">
        <button class="btn btn-success me-2" type="submit"> <!-- Agregado "me-2" para margen a la derecha -->
            <span class="material-symbols-outlined">search</span>
        </button>
        <a href="{{ route('usuarios.create') }}" class="btn btn-primary me-1 btn-sm d-flex align-items-center justify-content-center">Crear Usuario
        </a>
    </div>
</form>
<br>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Username</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $u)
        <tr>
            <td>{{ $contador }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->usu_apellidos }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->username }}</td>
            <td>Sin Roles</td>
            <td class="d-flex">
                 <a href="{{ route('usuarios.edit', $u->id) }}" class="btn btn-warning me-1 btn-sm d-flex align-items-center justify-content-center"> <!-- Agregué "#" en el href -->
                    <span class="material-symbols-outlined">edit</span>Editar
                </a>
                <form action="{{ route('usuarios.destroy', $u->id) }}" method="POST" onsubmit="return confirm('¿Desea eliminar el Usuario?')" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger me-1 btn-sm d-flex align-items-center justify-content-center">
                        <span class="material-symbols-outlined me-1">delete</span>Eliminar
                    </button>
                </form>
            </td>
        </tr>
        @php
            $contador++;
        @endphp
        @endforeach
    </tbody>
</table>

@endsection
