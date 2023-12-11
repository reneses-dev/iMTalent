@extends('layout')

@section('title', 'Portfolio')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-2">
        @if (auth()->user()->role === 'talent')
        <h1 class="display-4 text-primary py-2">Mis proyectos</h1>
            <a class="btn btn-primary text-white" href="{{route('projects.create')}}">
                Crear proyecto
            </a>
        @else
            <h1 class="display-4 text-primary py-2 mb-0">Proyectos</h1>
        @endif
    </div>
    <hr>
    <p class="mb-4 py-4 text-black-50"><small><i>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cum nihil, eaque voluptates harum eum quo id, odio, adipisci itaque ut quae perferendis delectus. Reiciendis facilis sit corrupti veritatis reprehenderit.
    </i></small></p>
    <ul class="list-group">
        @forelse ($projects as $project)
            <li class="list-group-item border-0 mb-3 shadow-sm">
                <a class="d-flex justify-content-between align-items-center" href="{{route('projects.show', $project)}}">
                    <span class="text-black font-weight-bold">
                        {{ $project->title }}
                    </span> 
                    <span class="text-black-50">
                        {{ $project->created_at->format('d/m/Y')}}
                    </span>
                </a>
            </li>
        @empty
            <li class="list-group-item border-0 mb-3 shadow-sm">
                No hay proyectos para mostrar
            </li>
        @endforelse
        @if (auth()->user()->role === 'company')
            <div class="row justify-content-center text-center py-1" style="margin-top: 100px">
                {{ $projects->links() }}
            </div>
        @endif
    </ul>
</div>
@endsection