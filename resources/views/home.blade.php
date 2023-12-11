@extends('layout')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    
    $(document).ready(function () {
        $('.icon').click(function () {
            $(this).closest('.icon-container').next('.hidden-paragraph').slideToggle();
        });
    });
</script>

@section('title', 'Home') <!-- No es necesario cerrar la section si pasamos un segundo parametro -->

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-5 mx-auto mt-1">
            @auth
            <h1 class="display-4 text-primary py-4"> Bienvenid@! {{ auth()->user()->name }} </h1>
            @endauth
            @guest
            <h1 class="display-4 text-primary mt-3"> Bienvenid@!</h1>
            @endguest
            <p class="lead text-secondary text-justify mt-5 py-2">
                Este es un sitio web destinado a personas que buscan empresas y empresas que buscan talento. 
                Aquí, podrás crear tu usuario y generar tu propio perfil para darte a conocer al mundo laboral. 
                Las empresas podrán contactar contigo mediante un correo electrónico que llegará a tu bandeja de 
                entrada de gmail.
            </p>
            <p class="lead text-secondary text-justify ">Es importante destacar tus skills, tu formación y los 
                proyectos o experiencia que tienes en tu carrera profesional para que las empresas puedan valorarte 
                como te mereces. No esperes más, crea tu perfil y házte ver!
                
            </p> 
            @guest
                <p class="lead text-secondary text-justify">Todavía no tienes usuario? <a class="lead text-justify text-primary mx-3" href="{{ route('register')}}"> Regístrate gratis </a>  </p>
            <div class="icon-container">
                <i class="fas fa-plus-circle icon"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 16 16">
                    <path fill="#00BFA6" d="M7.5 0.5A7 7 0 1 0 7.5 14.5A7 7 0 1 0 7.5 0.5Z"></path><path fill="#00BFA6" d="M7.5,1C11.084,1,14,3.916,14,7.5S11.084,14,7.5,14S1,11.084,1,7.5S3.916,1,7.5,1 M7.5,0 C3.358,0,0,3.358,0,7.5S3.358,15,7.5,15S15,11.642,15,7.5S11.642,0,7.5,0L7.5,0z"></path><path fill="#fff" d="M7.5 3.83A.67.67 0 1 0 7.5 5.17.67.67 0 1 0 7.5 3.83zM8 10L8 6 6.329 6 6.329 7 7 7 7 10 6 10 6 11 9 11 9 10z"></path>
                    </svg>
                </i>
            </div>
            <p class="hidden-paragraph alert text-black-50 text-center">
                <small>
                    Al crear tu perfil, es importante indicar si eres empresa o talento. 
                </small><br>
                <small>Una vez creado el perfil no se podrán modificar estos cambios.</small>
            </p>
            @endguest
        </div>
        <div class="col-lg-5 col-md-12 mx-auto mt-5">
            <img class="img-fluid mt-4" src="/img/home.svg" alt="Desarrollo Web">
        </div>
    </div>
    <div class="row py-3">
        @auth
        @if (auth()->user()->role === 'talent')
            <div class="text-center py-1">
                <a class="nav-link" href="{{route('projects.index')}}" style="color: #38B2AC;">Ir a mis proyectos</a>
            </div>
        @else
            <div class="text-center py-1">
                <a class="nav-link" href="{{route('projects.index')}}" style="color: #38B2AC;">Ir a los proyectos</a>
            </div>
        @endif
        @endauth
    </div>
</div>
@endsection