@php
$contador = 1;
@endphp
@extends('layouts.app')

@section('content')

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Cedula del Estudiante</th>
            <th>USD</th>
            <th>Valor a Pagar</th>
            <th>REC</th>
            <th>Codigo</th>
            <th>N</th>
            <th>Secuencial</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datos as $d)
        <tr> <!-- Agregué la etiqueta <tr> para cada fila -->
            <td>{{ $contador }}</td>
            <td>{{ $d->est_cedula }}</td>
            <td>USD</td>
            <td>{{ $d->valor_pagar }}</td>
            <td>REC</td>
            <td>{{ $d->codigo }}</td>
            <td>N</td>
            <td>{{$d->secuencial}}</td>
        </tr> <!-- Agregué la etiqueta de cierre </tr> -->
        @php
            $contador++;
        @endphp
        @endforeach
    </tbody>
</table>
@endsection
