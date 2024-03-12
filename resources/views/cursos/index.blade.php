@extends('layouts.app')

@section('content')

<a href="{{ route('cursos.create') }}" class="btn btn-success btn-sm mb-2">
    <span class="material-symbols-outlined align-middle">add</span>
    <span class="align-middle">Nuevo Curso</span>
</a>
<a href="{{ route('exportar.cursos') }}" class="btn btn-primary btn-sm mb-2">Exportar Cursos a Excel</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Grupo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $c)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $c->cur_titulo }}</td>
                <td>{{ $c->cur_descripcion }}</td>
                <td>{{ $c->cur_grupo }}</td>
                <td>{{ $c->cur_estado == 1 ? 'Activo' : 'Inactivo' }}</td>
                <td class="d-flex">
                    <a href="{{ route('cursos.edit', $c->cur_id) }}" class="btn btn-warning btn-sm me-1">
                        <span class="material-symbols-outlined">edit</span>
                    </a>
                    <form action="{{ route('cursos.destroy', $c->cur_id) }}" method="POST" onsubmit="return confirm('¿Desea eliminar el Curso?')">
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
