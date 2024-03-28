@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<form method="POST" class="d-flex" role="search" action="{{ route('buscar')}}">
    @csrf
    <div class="d-flex"> <!-- Agregado div para flexibilidad -->
        <input class="form-control me-2 col-12" type="search" placeholder="Buscar" aria-label="Search" name="buscar">
        <button class="btn btn-success me-2" type="submit"> <!-- Agregado "me-2" para margen a la derecha -->
            <span class="material-symbols-outlined">search</span>
        </button>
        <a href="{{ route('ordenes.index') }}" class="btn btn-warning me-2"> <!-- Modificado para redireccionar -->
            <span class="material-symbols-outlined">arrow_back</span>
        </a>
    </div>
</form>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Orden</th>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Codigo</th>
            <th>Fecha Registro</th>
            <th>Valor Pagar</th>
            <th>Fecha Pago</th>
            <th>Valor Pagado</th>
            <th>Estado</th>
            <th>Mes</th>
            <th>Responsable</th>
            <th>Secuencial</th>
            <th>Documento</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $e)
        <tr> <!-- Agregué la etiqueta <tr> para cada fila -->
            <td>{{ $e->ord_id }}</td>
            <td>{{ $e->mat_id }}</td>
            <td>{{ $e->est_nombres }}</td>
            <td>{{ $e->est_apellidos }}</td>
            <td>{{ $e->codigo }}</td>
            <td>{{ $e->fecha_registro }}</td>
            <td>{{ $e->valor_pagar }}</td>
            <td>{{ $e->fecha_pago }}</td>
            <td>{{ $e->valor_pagado }}</td>
            <td>{{ $e->estado }}</td>
            <td>{{ $e->mes }}</td>
            <td>{{ $e->responsable }}</td>
            <td>{{ $e->secuencial }}</td>
            <td>{{ $e->documento }}</td>
            <td class="d-flex">
                <a href="" class="btn btn-warning btn-sm me-1"> <!-- Agregué "#" en el href -->
                    <span class="material-symbols-outlined">edit</span>
                </a>
                <form action="" method="POST" onsubmit="return confirm('¿Desea eliminar la Orden?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm-1">
                        <span class="material-symbols-outlined">delete</span>
                    </button>
                </form>
            </td>
        </tr> <!-- Agregué la etiqueta de cierre </tr> -->
        @endforeach
    </tbody>
</table>

@endsection
