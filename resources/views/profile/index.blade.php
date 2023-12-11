@extends('layout')

@section('title', 'About')

@section('content')
<div class="cv-container p-3">
        @if (auth()->user()->role === 'talent')
            @forelse ($userProfile as $userProfileItem)
                <div class="cv-header d-flex flex-column align-items-center ">
                    <h1>{{$userProfileItem->name}} {{$userProfileItem->surnames}}</h1>
                    <span>{{$userProfileItem->profession}}</span>
                </div>
                <hr>
                <!-- Body -->
                <div class="cv-body">
                    <!-- Contacto y Formación Académica -->
                    <div class="row">
                        <!-- Contacto-->
                        <div class="col-md-6 mt-4">
                            <h3>CONTACTO</h3>
                            @foreach ($contactProfile as $contactProfileItem)
                                <span>{{$contactProfileItem->location}}, {{$contactProfileItem->zip_code}}</span><br>
                                <span>{{$contactProfileItem->phone}}</span><br>
                                <span>{{$contactProfileItem->email}}</span><br>
                            @endforeach
                            @foreach ($urlsProfile as $urlProfileItem)
                                <span>{{$urlProfileItem->url_linkedIn}}</span>
                            @endforeach
                        </div>
                        <!-- Formación académica -->
                        <div class="col-md-6 mt-4">
                            <h3>FORMACIÓN ACADÉMICA</h3>
                            @foreach ($educationProfile as $educationProfileItem)
                            <span class="text-black">{{$educationProfileItem->title}}: {{$educationProfileItem->name_title}} <br></span>
                                <span class="text-black-50">{{Carbon\Carbon::parse($educationProfileItem->start_year)->format('Y')}} - {{Carbon\Carbon::parse($educationProfileItem->end_year)->format('Y')}} | {{$educationProfileItem->institution}}, {{$educationProfileItem->location}} <br>  
                            </span>
                            @endforeach
                        </div>
                    </div>

                    <!-- Experiencia Laboral -->
                    <div class="mt-4">
                        <h3>EXPERIENCIA LABORAL</h3>
                        @foreach ($experienceProfile as $experienceProfileItem)
                        <span>
                            <b>{{Carbon\Carbon::parse($experienceProfileItem->start_date)->format('Y')}} - {{Carbon\Carbon::parse($experienceProfileItem->end_date)->format('Y')}} | {{$experienceProfileItem->name_company}} 
                            </b>
                        </span>
                        <br>
                        <span>
                            <ul>
                                <li> {{$experienceProfileItem->description_1}} </li>
                            @if(isset($experienceProfileItem->description_2) && $experienceProfileItem->description_2 !== '')
                                <li> {{$experienceProfileItem->description_2}} </li>
                            @endif
                            @if(isset($experienceProfileItem->description_3) && $experienceProfileItem->description_3 !== '')
                                <li> {{$experienceProfileItem->description_3}} </li>
                            @endif
                            @if(isset($experienceProfileItem->description_4) && $experienceProfileItem->description_4 !== '')
                                <li> {{$experienceProfileItem->description_4}} </li>
                            @endif
                            @if(isset($experienceProfileItem->description_5) && $experienceProfileItem->description_5 !== '')
                                <li> {{$experienceProfileItem->description_5}} </li>
                            @endif
                            </ul>
                        </span>
                        @endforeach
                    </div>
                    <!-- Competencias Tecnológicas -->
                    <div class="mt-4">
                        <h3>COMPETENCIAS TECNOLÓGICAS</h3>
                        @foreach ($skillsProfile as $skillsProfileItem)
                            <span><b>Lenguajes de programación: </b></span>
                            <span>
                                {{$skillsProfileItem->programming_language}}
                                @if(isset($skillsProfileItem->programming_language_2) && $skillsProfileItem->programming_language_2 !== '')
                                ,  {{$skillsProfileItem->programming_language_2}}
                                @endif
                                @if(isset($skillsProfileItem->programming_language_3) && $skillsProfileItem->programming_language_3 !== '')
                                ,  {{$skillsProfileItem->programming_language_3}}
                                @endif
                                @if(isset($skillsProfileItem->programming_language_4) && $skillsProfileItem->programming_language_4 !== '')
                                ,  {{$skillsProfileItem->programming_language_4}}
                                @endif
                                @if(isset($skillsProfileItem->programming_language_5) && $skillsProfileItem->programming_language_5 !== '')
                                ,  {{$skillsProfileItem->programming_language_5}}
                                @endif
                            </span><br>
                            <span><b>Frameworks: </b></span>
                            <span>
                                {{$skillsProfileItem->framework}}
                                @if(isset($skillsProfileItem->framework_2) && $skillsProfileItem->framework_2 !== '')
                                ,  {{$skillsProfileItem->framework_2}}
                                @endif
                                @if(isset($skillsProfileItem->framework_3) && $skillsProfileItem->framework_3 !== '')
                                ,  {{$skillsProfileItem->framework_3}}
                                @endif
                                @if(isset($skillsProfileItem->framework_4) && $skillsProfileItem->framework_4 !== '')
                                ,  {{$skillsProfileItem->framework_4}}
                                @endif
                                @if(isset($skillsProfileItem->framework_5) && $skillsProfileItem->framework_5 !== '')
                                ,  {{$skillsProfileItem->framework_5}}
                                @endif
                            </span><br>
                            <span><b>Lenguaje de marcas: </b></span>
                            <span>
                                {{$skillsProfileItem->markup_language}}
                                @if(isset($skillsProfileItem->markup_language_2) && $skillsProfileItem->markup_language_2 !== '')
                                ,  {{$skillsProfileItem->markup_language_2}}
                                @endif
                                @if(isset($skillsProfileItem->markup_language_3) && $skillsProfileItem->markup_language_3 !== '')
                                ,  {{$skillsProfileItem->markup_language_3}}
                                @endif
                                @if(isset($skillsProfileItem->markup_language_4) && $skillsProfileItem->markup_language_4 !== '')
                                ,  {{$skillsProfileItem->markup_language_4}}
                                @endif
                                @if(isset($skillsProfileItem->markup_language_5) && $skillsProfileItem->markup_language_5 !== '')
                                ,  {{$skillsProfileItem->markup_language_5}}
                                @endif
                            </span><br>
                            <span><b>Bases de datos: </b></span>
                            <span>
                                {{$skillsProfileItem->database}}
                                @if(isset($skillsProfileItem->database_2) && $skillsProfileItem->database_2 !== '')
                                ,  {{$skillsProfileItem->database_2}}
                                @endif
                                @if(isset($skillsProfileItem->database_3) && $skillsProfileItem->database_3 !== '')
                                ,  {{$skillsProfileItem->database_3}}
                                @endif
                                @if(isset($skillsProfileItem->database_4) && $skillsProfileItem->database_4 !== '')
                                ,  {{$skillsProfileItem->database_4}}
                                @endif
                                @if(isset($skillsProfileItem->database_5) && $skillsProfileItem->database_5 !== '')
                                ,  {{$skillsProfileItem->database_5}}
                                @endif
                            </span><br>
                            <span><b>Control de versiones: </b></span>
                            <span>
                                {{$skillsProfileItem->control_version}}
                                @if(isset($skillsProfileItem->control_version_2) && $skillsProfileItem->control_version_2 !== '')
                                ,  {{$skillsProfileItem->control_version_2}}
                                @endif
                                @if(isset($skillsProfileItem->control_version_3) && $skillsProfileItem->control_version_3 !== '')
                                ,  {{$skillsProfileItem->control_version_3}}
                                @endif
                                @if(isset($skillsProfileItem->control_version_4) && $skillsProfileItem->control_version_4 !== '')
                                ,  {{$skillsProfileItem->control_version_4}}
                                @endif
                                @if(isset($skillsProfileItem->control_version_5) && $skillsProfileItem->control_version_5 !== '')
                                ,  {{$skillsProfileItem->control_version_5}}
                                @endif
                            </span><br>
                            <span><b>Otros: </b></span>
                            <span>
                                {{$skillsProfileItem->other}}
                                @if(isset($skillsProfileItem->other_2) && $skillsProfileItem->other_2 !== '')
                                ,  {{$skillsProfileItem->other_2}}
                                @endif
                                @if(isset($skillsProfileItem->other_3) && $skillsProfileItem->other_3 !== '')
                                ,  {{$skillsProfileItem->other_3}}
                                @endif
                                @if(isset($skillsProfileItem->other_4) && $skillsProfileItem->other_4 !== '')
                                ,  {{$skillsProfileItem->other_4}}
                                @endif
                                @if(isset($skillsProfileItem->other_5) && $skillsProfileItem->other_5 !== '')
                                ,  {{$skillsProfileItem->other_5}}
                                @endif
                            </span><br>
                        @endforeach
                    </div>
                </div>
                <!-- Footer -->
                <div class="cv-footer">
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <h3>OTROS DATOS DE INTERÉS</h3>
                            @foreach ($interestProfile as $interestProfileItem)
                                <span> {{ $interestProfileItem->interest }}</span><br>
                            @endforeach
                        </div>
                        <div class="col-md-6 mt-4">
                            <h3>IDIOMAS</h3>
                            @foreach ($languageProfile as $languageProfileItem)
                                <span> {{$languageProfileItem->language}} - {{$languageProfileItem->level}} ({{$languageProfileItem->title_language}})</span><br>
                            @endforeach
                        </div>
                    </div>
                </div>
                @if (auth()->user()->role === 'company')
                    <div class="row justify-content-center text-center py-4" style="margin-top: 100px">
                        {{ $userProfileData->links() }}
                    </div>
                @endif
                <div class="row mt-4 mb-0">
                    <div class="align-items-left">
                        @if (auth()->user()->role === 'talent')
                            <b><a class="text-primary mb-4" href="{{route('profile.edit')}}">Editar</a></b><br>
                            <b><a class="text-danger" href="#" onclick="document.getElementById('delete-profile').submit()">Eliminar</a></b>
                            <form class="d-none" id="delete-profile" action="{{route('profile.delete')}}" method="POST">
                                @method('DELETE') @csrf
                            </form>
                        @endif
                    </div>
                </div>
            @empty
            <br>
                <div class="alert alert-info d-block text-center" role="alert">
                    <p class="align-items-center text-center">Todavía no has creado ningún perfil.</p>
                    <a class="align-items-center text-center" href="{{route('profile.create')}}">Crea aquí tu perfil</a>               
                </div>
            @endforelse
        @else
        @if ($profileData)  
            @foreach ($profileData as $data)
                @foreach ($data['userProfile'] as $userProfileItem)
                    <div class="cv-header d-flex flex-column align-items-center ">
                        <h1>{{$userProfileItem->name}} {{$userProfileItem->surnames}}</h1>
                        <span>{{$userProfileItem->profession}}</span>
                    </div>
                    <hr>
                    <div class="row d-flex flex-column align-items-center">

                    </div>
                    <!-- Body -->
                    <div class="cv-body">
                        <!-- Contacto y Formación Académica -->
                        <div class="row">
                            <!-- Contacto-->
                            <div class="col-md-6 mt-4">
                                <h3>CONTACTO</h3>
                                @foreach ($data['contactProfile'] as $contactProfileItem)
                                    <span>{{$contactProfileItem->location}}, {{$contactProfileItem->zip_code}}</span><br>
                                    <span>{{$contactProfileItem->phone}}</span><br>
                                    <span>{{$contactProfileItem->email}}</span><br>
                                @endforeach
                                @foreach ($data['urlsProfile'] as $urlProfileItem)
                                    <span>{{$urlProfileItem->url_linkedIn}}</span>
                                @endforeach
                            </div>
                            <!-- Formación académica -->
                            <div class="col-md-6 mt-4">
                                <h3>FORMACIÓN ACADÉMICA</h3>
                                @foreach ($data['educationProfile'] as $educationProfileItem)
                                <span class="text-black">{{$educationProfileItem->title}}: {{$educationProfileItem->name_title}} <br></span>
                                    <span class="text-black-50">{{Carbon\Carbon::parse($educationProfileItem->start_year)->format('Y')}} - {{Carbon\Carbon::parse($educationProfileItem->end_year)->format('Y')}} | {{$educationProfileItem->institution}}, {{$educationProfileItem->location}} <br>  
                                </span>
                                @endforeach
                            </div>
                        </div>
                        <!-- Experiencia Laboral -->
                        <div class="mt-4">
                            <h3>EXPERIENCIA LABORAL</h3>
                            @foreach ($data['experienceProfile'] as $experienceProfileItem)
                            <span>
                                <b>{{Carbon\Carbon::parse($experienceProfileItem->start_date)->format('Y')}} - {{Carbon\Carbon::parse($experienceProfileItem->end_date)->format('Y')}} | {{$experienceProfileItem->name_company}} 
                                </b>
                            </span>
                            <br>
                            <span>
                                <ul>
                                    <li> {{$experienceProfileItem->description_1}} </li>
                                @if(isset($experienceProfileItem->description_2) && $experienceProfileItem->description_2 !== '')
                                    <li> {{$experienceProfileItem->description_2}} </li>
                                @endif
                                @if(isset($experienceProfileItem->description_3) && $experienceProfileItem->description_3 !== '')
                                    <li> {{$experienceProfileItem->description_3}} </li>
                                @endif
                                @if(isset($experienceProfileItem->description_4) && $experienceProfileItem->description_4 !== '')
                                    <li> {{$experienceProfileItem->description_4}} </li>
                                @endif
                                @if(isset($experienceProfileItem->description_5) && $experienceProfileItem->description_5 !== '')
                                    <li> {{$experienceProfileItem->description_5}} </li>
                                @endif
                                </ul>
                            </span>
                            @endforeach
                        </div>
                        <!-- Competencias Tecnológicas -->
                        <div class="mt-4">
                            <h3>COMPETENCIAS TECNOLÓGICAS</h3>
                            @foreach ($data['skillsProfile'] as $skillsProfileItem)
                                <span><b>Lenguajes de programación: </b></span>
                                <span>
                                    {{$skillsProfileItem->programming_language}}
                                    @if(isset($skillsProfileItem->programming_language_2) && $skillsProfileItem->programming_language_2 !== '')
                                    ,  {{$skillsProfileItem->programming_language_2}}
                                    @endif
                                    @if(isset($skillsProfileItem->programming_language_3) && $skillsProfileItem->programming_language_3 !== '')
                                    ,  {{$skillsProfileItem->programming_language_3}}
                                    @endif
                                    @if(isset($skillsProfileItem->programming_language_4) && $skillsProfileItem->programming_language_4 !== '')
                                    ,  {{$skillsProfileItem->programming_language_4}}
                                    @endif
                                    @if(isset($skillsProfileItem->programming_language_5) && $skillsProfileItem->programming_language_5 !== '')
                                    ,  {{$skillsProfileItem->programming_language_5}}
                                    @endif
                                </span><br>
                                <span><b>Frameworks: </b></span>
                                <span>
                                    {{$skillsProfileItem->framework}}
                                    @if(isset($skillsProfileItem->framework_2) && $skillsProfileItem->framework_2 !== '')
                                    ,  {{$skillsProfileItem->framework_2}}
                                    @endif
                                    @if(isset($skillsProfileItem->framework_3) && $skillsProfileItem->framework_3 !== '')
                                    ,  {{$skillsProfileItem->framework_3}}
                                    @endif
                                    @if(isset($skillsProfileItem->framework_4) && $skillsProfileItem->framework_4 !== '')
                                    ,  {{$skillsProfileItem->framework_4}}
                                    @endif
                                    @if(isset($skillsProfileItem->framework_5) && $skillsProfileItem->framework_5 !== '')
                                    ,  {{$skillsProfileItem->framework_5}}
                                    @endif
                                </span><br>
                                <span><b>Lenguaje de marcas: </b></span>
                                <span>
                                    {{$skillsProfileItem->markup_language}}
                                    @if(isset($skillsProfileItem->markup_language_2) && $skillsProfileItem->markup_language_2 !== '')
                                    ,  {{$skillsProfileItem->markup_language_2}}
                                    @endif
                                    @if(isset($skillsProfileItem->markup_language_3) && $skillsProfileItem->markup_language_3 !== '')
                                    ,  {{$skillsProfileItem->markup_language_3}}
                                    @endif
                                    @if(isset($skillsProfileItem->markup_language_4) && $skillsProfileItem->markup_language_4 !== '')
                                    ,  {{$skillsProfileItem->markup_language_4}}
                                    @endif
                                    @if(isset($skillsProfileItem->markup_language_5) && $skillsProfileItem->markup_language_5 !== '')
                                    ,  {{$skillsProfileItem->markup_language_5}}
                                    @endif
                                </span><br>
                                <span><b>Bases de datos: </b></span>
                                <span>
                                    {{$skillsProfileItem->database}}
                                    @if(isset($skillsProfileItem->database_2) && $skillsProfileItem->database_2 !== '')
                                    ,  {{$skillsProfileItem->database_2}}
                                    @endif
                                    @if(isset($skillsProfileItem->database_3) && $skillsProfileItem->database_3 !== '')
                                    ,  {{$skillsProfileItem->database_3}}
                                    @endif
                                    @if(isset($skillsProfileItem->database_4) && $skillsProfileItem->database_4 !== '')
                                    ,  {{$skillsProfileItem->database_4}}
                                    @endif
                                    @if(isset($skillsProfileItem->database_5) && $skillsProfileItem->database_5 !== '')
                                    ,  {{$skillsProfileItem->database_5}}
                                    @endif
                                </span><br>
                                <span><b>Control de versiones: </b></span>
                                <span>
                                    {{$skillsProfileItem->control_version}}
                                    @if(isset($skillsProfileItem->control_version_2) && $skillsProfileItem->control_version_2 !== '')
                                    ,  {{$skillsProfileItem->control_version_2}}
                                    @endif
                                    @if(isset($skillsProfileItem->control_version_3) && $skillsProfileItem->control_version_3 !== '')
                                    ,  {{$skillsProfileItem->control_version_3}}
                                    @endif
                                    @if(isset($skillsProfileItem->control_version_4) && $skillsProfileItem->control_version_4 !== '')
                                    ,  {{$skillsProfileItem->control_version_4}}
                                    @endif
                                    @if(isset($skillsProfileItem->control_version_5) && $skillsProfileItem->control_version_5 !== '')
                                    ,  {{$skillsProfileItem->control_version_5}}
                                    @endif
                                </span><br>
                                <span><b>Otros: </b></span>
                                <span>
                                    {{$skillsProfileItem->other}}
                                    @if(isset($skillsProfileItem->other_2) && $skillsProfileItem->other_2 !== '')
                                    ,  {{$skillsProfileItem->other_2}}
                                    @endif
                                    @if(isset($skillsProfileItem->other_3) && $skillsProfileItem->other_3 !== '')
                                    ,  {{$skillsProfileItem->other_3}}
                                    @endif
                                    @if(isset($skillsProfileItem->other_4) && $skillsProfileItem->other_4 !== '')
                                    ,  {{$skillsProfileItem->other_4}}
                                    @endif
                                    @if(isset($skillsProfileItem->other_5) && $skillsProfileItem->other_5 !== '')
                                    ,  {{$skillsProfileItem->other_5}}
                                    @endif
                                </span><br>
                            @endforeach
                        </div>
                    </div>
                    <!-- Footer -->
                    <div class="cv-footer">
                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <h3>OTROS DATOS DE INTERÉS</h3>
                                @foreach ($data['interestProfile'] as $interestProfileItem)
                                    <span> {{ $interestProfileItem->interest }}</span><br>
                                @endforeach
                            </div>
                            <div class="col-md-6 mt-4">
                                <h3>IDIOMAS</h3>
                                @foreach ($data['languageProfile'] as $languageProfileItem)
                                    <span> {{$languageProfileItem->language}} - {{$languageProfileItem->level}} ({{$languageProfileItem->title_language}})</span><br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @if (auth()->user()->role === 'company')
                        <div class="row justify-content-center text-center py-4" style="margin-top: 100px">
                            {{ $userProfileData->links() }}
                        </div>
                    @endif
                    <div class="row mt-4 mb-0">
                        <div class="align-items-left">
                            @if (auth()->user()->role === 'talent')
                                <b><a class="text-primary mb-4" href="{{route('profile.edit')}}">Editar</a></b><br>
                                <b><a class="text-danger" href="#" onclick="document.getElementById('delete-profile').submit()">Eliminar</a></b>
                                <form class="d-none" id="delete-profile" action="{{route('profile.delete')}}" method="POST">
                                    @method('DELETE') @csrf
                                </form>
                            @endif
                        </div>
                    </div>
                @endforeach       
            @endforeach
        @endif
    @endif
</div>
@endsection