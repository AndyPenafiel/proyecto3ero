@extends('layouts.app')

@section('content')

    <h2 class="div">Edición del Usuario: <span class="text-success">{{ $usuario->name }} {{ $usuario->usu_apellidos }}</span></h2>
    <br>
    <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $usuario->name }}">
        </div>
        <br>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" id="usu_apellidos" name="usu_apellidos" class="form-control" value="{{ $usuario->usu_apellidos }}">
        </div>
        <br>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $usuario->email }}">
        </div>
        <br>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" class="form-control" value="{{ $usuario->username }}">
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-lg me-1">Guardar cambios</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-success btn-lg me-2">Contraseña</a>
        <a href="{{ route('usuarios.index') }}" class="btn btn-warning btn-lg me-2">Regresar</a>
    </form>
@endsection
