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
                <th>No</th>
                <th>ORDEN</th>
                <th>IDENTIFICADOR</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
    
    @endsection
