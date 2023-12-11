@extends('layout')

@section('title', 'Crear proyecto')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h1>Nuevo proyecto</h1>
                <hr>
                @include('partials.errors')
        
                <form class="py-3 px-4 shadow rounded" action="{{ route('projects.store') }}" method="post">   
        
                    @include('projects.form', ['buttonText'=>'Guardar'])
        
                </form>
            </div>
        </div>
    </div>
    
    <script>
        function autofillUrl(){
            var $url = document.getElementById('title').value;
            var $urlLowerCase = $url.toLowerCase();
            var $urlFinal = $urlLowerCase.replaceAll(' ', '-');
            document.getElementById('url').value = $urlFinal;
        }
    </script>
@endsection
