@extends('layout')

@section('title', 'About')

@section('content')

<div class="cv-container p-2">

    <form class="bg-white py-3 px-4 shadow rounded justify-content-center" action="{{ route('profile.store') }}" method="POST">
        @csrf @method("POST")
        <!-- Información básica -->
        @include('profile.forms.contact')
        <!-- Formación académica -->
        @include('profile.forms.education')
        <!-- Experiencia Laboral -->
        @include('profile.forms.experience')
        <!-- Competencias Tecnológicas -->
        @include('profile.forms.skills')
        <!-- Datos de interés -->
        @include('profile.forms.interests')
        <!-- Idiomas -->
        @include('profile.forms.language')
        <div class="row align-items-center py-4">
            <div>
                <button class="btn btn-primary btn-lg btn-block form-control text-white mt-5">Crear perfil</button>
                <a class="btn btn-lg btn-block form-control text-primary" href="{{route('profile.index')}}">Cancelar</a>
            </div>
        </div>
    </form>
</div>
@endsection