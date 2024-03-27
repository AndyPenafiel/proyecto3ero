@extends('layouts.app')

@section('content')
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Fecha</th>
            <th>Año Lectivo</th>
            <th>Jornada</th>
            <th>Mes</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $e)
        <tr> <!-- Agregué la etiqueta <tr> para cada fila -->
            <td>{{ $e->codigo }}</td>




           
        </tr> <!-- Agregué la etiqueta de cierre </tr> -->
        @endforeach
    </tbody>
</table>



@endsection