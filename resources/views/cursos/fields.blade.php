<div class='container'>
        @csrf
        <div class="mb-3">
            <label for="cur_titulo" class="form-label">Titulo del Curso</label>
            <input type="text" class="form-control" id="cur_titulo" placeholder="Titulo del Curso" name="cur_titulo" value="{{isset($curso)?$curso->cur_titulo:''}}">
<br>
            <label for="cur_descripcion" class="form-label">Descripcion del Curso</label>
            <input type="text" class="form-control" id="cur_descripcion" placeholder="Descripcion del curso" name="cur_descripcion" value="{{isset($curso)?$curso->cur_descripcion:''}}">
<br>
            <label for="cur_grupo" class="form-label">Grupo del Curso</label>
            <input type="text" class="form-control" id="cur_grupo" placeholder="Titulo del Curso" name="cur_grupo" value="{{isset($curso)?$curso->cur_grupo:''}}">
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
</div>
