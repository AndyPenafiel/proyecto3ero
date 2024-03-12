@extends('layouts.app')
@section('content')
<h1>Crear Cursos</h1>
<div class="container">
    <div>
        <form action="{{route('users.store')}}" method="POST">
        @csrf    
        @include('cursos.fields')
        </form>
    </div>
</div>
@endsection