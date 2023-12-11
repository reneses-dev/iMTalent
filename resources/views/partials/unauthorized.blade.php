@extends('layout')

@section('title', 'Unauthorized')

@section('content')

<div class="alert alert-info d-block text-center" role="alert">
    <p class="align-items-center text-center">No tienes permisos para realizar esta acción</p>
    <a class="align-items-center text-center" href="{{route('home')}}">Volver a Inicio</a>               
</div>

@endsection