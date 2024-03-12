@extends('layouts.app')
@section('content')
<h1>Crear Usuarios</h1>
<div class="container">
    <div>
        <form action="{{route('users.store')}}" method="POST">
        @csrf
        @include('users.fields')
        </form>
    </div>
</div>
@endsection