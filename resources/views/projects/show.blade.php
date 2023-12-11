@extends('layout')

@section('title', $project->title)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 py-4">
                <div class="bg-white align-items-center p-4 shadow rounded">
                    <h3 class="py-2">
                        {{$project->title}}
                    </h3>
                    <hr>
                    <p class="shadow">
                    <p class="text-secondary">
                        {{$project->description}}
                    </p>
                    <p class="text-secondary">
                        Código de mi proyecto aquí: <a href="{{$project->url_github}}">{{$project->url_github}}</a>
                    </p>
                    @if (auth()->user()->role === 'company')
                        <p class="text-secondary">
                            Puedes contactar conmigo mediante un correo electrónico: <a href="{{route('contact')}}">{{$user->email}}</a>
                        </p>
                    @endif
                    <p class="text-black-50">
                        {{$project->created_at->diffForHumans()}}
                    </p>
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <a href="{{route('projects.index')}}">Volver</a>
                        </div>
                        @if (auth()->user()->role === 'talent')
                            <div class="col-md-5 text-end">
                                <a class="text-primary px-2" href="{{route('projects.edit', $project)}}">Editar</a>
                                <a class="text-danger" href="#" onclick="document.getElementById('delete-project').submit()">Eliminar</a>
                            </div>
                        @endif
                        @auth
                            
                            <form class="d-none" id="delete-project" action="{{route('projects.delete', $project)}}" method="POST">
                                @method('DELETE') @csrf
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid mt-4" src="/img/project.svg" alt="Proyecto Web">
            </div>
        </div>
    </div>
    
    
@endsection