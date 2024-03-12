@extends('layouts.app')

@section('content')
<h1>Editar Cursos</h1>
<div class="container">
    <div>
        <form action="{{route('cursos.update',$curso->cur_id)}}" method="POST">
        @csrf    
        @method('PUT')
        @include('cursos.fields')
        </form>
    </div>
</div>
@endsection