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
        <form  method="GET" class="form-inline">
            <div class="form-group mr-2">
                <label for="opcion" class="mr-2">Opción:</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                &nbsp;&nbsp;&nbsp;&nbsp;
                <label for="tipo" class="mr-2">Tipo:</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="mes" class="mr-2">Mes:</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="jornada" class="mr-2">Jornada:</label>

                <br>    

                <select id="opcion" name="opcion">
                    <option value="regular">Regular</option>
                    <option value="bgu">BGU</option>
                </select>
                &nbsp;&nbsp;&nbsp;
                
                <select id="tipo" name="tipo">
                    <option value="mensualidad">Mensualidad</option>
                    <option value="matricula">Matrícula</option>
                </select>
                &nbsp;&nbsp;&nbsp;
                
                <select id="mes" name="mes">
                    <option value="enero">Enero</option>
                    <option value="febrero">Febrero</option>
                    <option value="marzo">Marzo</option>
                    <option value="marzo">Abril</option>
                    <option value="marzo">Mayo</option>
                    <option value="marzo">Junio</option>
                    <option value="marzo">Julio</option>
                    <option value="marzo">Agosto</option>
                    <option value="marzo">Septiembre</option>
                    <option value="marzo">Octubre</option>
                    <option value="marzo">Noviembre</option>
                    <option value="marzo">Diciembre</option>
                </select>
                &nbsp;&nbsp;&nbsp;

                <select  id="jornada" name="jornada">
                    <option value="matutina">Matutina</option>
                    <option value="nocturna">Nocturna</option>
                    <option value="semipresencial">Semipresencial</option>
                    <option value="vespertina">Vespertina</option>
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
