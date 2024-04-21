@extends('layouts.app')

@section('content')

<h2 class="div">Crear Usuario:</h2>
<br>
<form method="POST" action="{{ route('usuarios.store') }}">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Ingrese su nombre">
    </div>
    <br>
    <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" id="usu_apellidos" name="usu_apellidos" class="form-control" placeholder="Ingrese su apellido">
    </div>
    <br>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Ingrese su correo electrónico">
    </div>
    <br>
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Ingrese su nombre de usuario">
    </div>
    <br>
    <div class="form-group">
        <label for="username">Rol:</label>
        <select id="roles" name="roles" class="form-control">Sin rol
        </select>
    </div>
    <br>
    <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese su contraseña">
    </div>
    <br>
    <button type="submit" class="btn btn-primary btn-lg me-1">Guardar cambios</button>
    <a href="{{ route('usuarios.index') }}" class="btn btn-warning btn-lg me-2">Regresar</a>
</form>
@endsection
