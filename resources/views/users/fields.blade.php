<div class='container'>
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="name" placeholder="Titulo del Curso" name="name" value="{{isset($user)?$user->name:''}}">
<br>
            <label for="rol_id" class="form-label">Rol</label>
            <!-- <input type="text" class="form-control" id="rol_id" placeholder="Descripcion del curso" name="rol_id" value="{{isset($user)?$user->rol_id:''}}"> -->
            <select class="form-control" id="rol_id" name="rol_id">
                        @foreach ($roles as $rol)
                            <option value="{{ $rol->rol_id }}" {{ isset($user) && $user->rol_id == $rol->rol_id ? 'selected' : null }}>
                                {{ $rol->rol_descripcion }}
                            </option>
                        @endforeach
                    </select>
<br>
            <label for="usu_nombre" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="usu_nombre" placeholder="Nombre" name="usu_nombre" value="{{isset($user)?$user->usu_nombre:''}}">
<br>
            <label for="email" class="form-label">Correo</label>
            <input type="text" class="form-control" id="email" placeholder="Correo" name="email" value="{{isset($user)?$user->email:''}}">
<br>
            <label for="password" class="form-label">Contraseña</label>
            <input type="text" class="form-control" id="password" placeholder="Contraseña" name="password" value="{{isset($user)?$user->password:''}}">
<br>
            <label for="usu_telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="usu_telefono" placeholder="Telefono" name="usu_telefono" value="{{isset($user)?$user->usu_telefono:''}}">
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
</div>
