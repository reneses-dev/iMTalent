@extends('layout')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.icon').click(function () {
            $(this).closest('.icon-container').next('.hidden-paragraph').slideToggle();
        });
    });
</script>
@section('title', 'Contact')
@section('content')
@if (auth()->user()->role === 'talent')
    @include('partials.unauthorized')
@else
    <div class="container">
        <div class="row mt-0">
            <div class="icon-container">
                <i class="fas fa-plus-circle icon"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 16 16">
                    <path fill="#00BFA6" d="M7.5 0.5A7 7 0 1 0 7.5 14.5A7 7 0 1 0 7.5 0.5Z"></path><path fill="#00BFA6" d="M7.5,1C11.084,1,14,3.916,14,7.5S11.084,14,7.5,14S1,11.084,1,7.5S3.916,1,7.5,1 M7.5,0 C3.358,0,0,3.358,0,7.5S3.358,15,7.5,15S15,11.642,15,7.5S11.642,0,7.5,0L7.5,0z"></path><path fill="#fff" d="M7.5 3.83A.67.67 0 1 0 7.5 5.17.67.67 0 1 0 7.5 3.83zM8 10L8 6 6.329 6 6.329 7 7 7 7 10 6 10 6 11 9 11 9 10z"></path>
                    </svg>
                </i>
            </div>   
            <p class="hidden-paragraph alert text-black-50 text-center"><small>Una vez enviado el mensaje me pondré en contacto contigo mediante el correo electrónico que me proporcione.
                Aseguresé de que el correo electrónico introducido es correcto antes de enviar el mensaje.</small></p>
        </div>
        <div class="row mt-3">
            <div class="col-lg-5 mx-auto mt-2">
                <img class="img-fluid mt-5" src="/img/contact.svg" alt="Desarrollo Web">
            </div>
            <div class="col-lg-5 mx-auto mt-4">    
                <form class="bg-white shadow rounded py-3 px-5"
                    method="POST" 
                    action="{{ route('messages.store') }}">
                    @csrf
                    <h6 class="formTitle mt-2 text-center">Formulario de Contacto</h6>
                    <hr class="mb-3">
                    <div class="form-group mb-3 mt-4">
                        <label class="mx-2 text-black-50" for="name">Nombre y apellidos</label>
                        <input  class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" 
                                id='name' 
                                type="name" 
                                name="name" 
                                value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="mx-2 text-black-50" for="email">Email</label>
                        <input  class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                                id="email" 
                                type="email" 
                                name="email"
                                value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="mx-2 text-black-50" for="subject">Asunto</label>
                        <input  class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                                id="subject" 
                                type="subject" 
                                name="subject"
                                value="{{ old('subject') }}">
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="mx-2 text-black-50" for="content">Contenido</label>
                        <textarea class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                                id="content" 
                                name="content">
                                {{ old('content') }}
                        </textarea>     
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
            
                    <button type="button" class="btn btn-primary btn-lg btn-block form-control text-white mt-2">
                        @lang('Send')
                    </button>
            
                </form>
            </div>
        </div>
    </div>
@endif
@endsection