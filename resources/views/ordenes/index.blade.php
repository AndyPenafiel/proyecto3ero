    @extends('layouts.app')

    @section('content')
    <style>
        select {
        padding: 5px;
        border-radius: 0;
        border: 1px solid #ccc;
        width: 150px; /* Puedes ajustar el ancho según tus necesidades */
        height: 30px; /* Establece la misma altura que el ancho para que sea cuadrado */
        }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <div class="container">
        <h1 class="text-center">Generar Órdenes</h1>
        <form method="POST" class="form-inline" action="{{ route('generar') }}">
            @csrf
            <div class="form-group mr-2">
                <!-- <label for="opcion" class="mr-2">Opción:</label> -->
                <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    -->
                <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbssp;&nbsp;&nbsp;&nbsp;    -->
                <!-- &nbsp;&nbsp;&nbsp;&nbsp; -->
                <label for="tipo" class="mr-2">Tipo:</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="mes" class="mr-2">Mes:</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="jornada" class="mr-2">Jornada:</label>

                <br>    

                <!-- <select id="opcion" name="opcion">
                    <option value="regular">Regular</option>
                    <option value="bgu">BGU</option>
                </select> -->
                <!-- &nbsp;&nbsp;&nbsp; -->
                
                <select id="anl_id" name="anl_id">
                    @foreach($periodos as $p)
                        <option value="{{ $p->id }}">{{ $p->anl_descripcion }}</option>
                    @endforeach
                </select>
                &nbsp;&nbsp;&nbsp;
                
                <select id="mes" name="mes">
                    @foreach($meses as $key=>$m)
                        <option value="{{ $key}}">{{ $m }}</option>
                    @endforeach
                </select>

                &nbsp;&nbsp;&nbsp;

                <select id="jor_id" name="jor_id">
                    @foreach($jornadas as $j)
                        <option value="{{ $j->id }}">{{ $j->jor_descripcion }}</option>
                    @endforeach
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary btn-sm mb-2">Generar</button>
            </div>
        </form>
        <br>
    </div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Secuencial</th>
            <th>Fecha</th>
            <th>Año Lectivo</th>
            <th>Jornada</th>
            <th>Mes</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ordenes as $o)
        <tr> <!-- Agregué la etiqueta <tr> para cada fila -->
            <td>{{ $o->secuencial }}</td>
            <td>{{ $o->fecha_registro }}</td>
            <td>{{ $o->anl_descripcion }}</td>
            <td>{{ $o->jor_descripcion }}</td>
            <td>{{ $o->mes }}</td>



            <td class="d-flex">

                <a href="{{ route('mostrar', $o->secuencial) }}" class="btn btn-success me-1"> <!-- Agregué "#" en el href -->
                    <span class="material-symbols-outlined">
                        visibility
                    </span>
                </a>

                <a href="" class="btn btn-warning btn-sm me-1"> <!-- Agregué "#" en el href -->
                    <span class="material-symbols-outlined">edit</span>
                </a>
                <form action="{{ route('ordenes.destroy', $o->secuencial) }}" method="POST" onsubmit="return confirm('¿Desea eliminar la Orden?')">
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
