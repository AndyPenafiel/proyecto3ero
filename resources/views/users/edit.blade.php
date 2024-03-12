@extends('layouts.app')
@section('content')
<h1>Editar Usuarios</h1>
<div class="container">
    <div>
        <form action="{{route('users.update',$user->usu_id)}}" method="POST">
        @csrf    
        @method('PUT')
        @include('users.fields')
        </form>
    </div>
</div>
@endsection