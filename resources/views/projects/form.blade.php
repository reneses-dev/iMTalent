<!-- Este formulario representa las vistas editar y crear -->

@csrf

<div class="form-group py-3">
    <label class="py-2" for="title">
        Título del proyecto
    </label>
    <input  class="form-control border-0 bg-light shadow-sm"
            id="title" 
            type="text" 
            name="title" 
            onchange="autofillUrl()"
            value="{{ old('title', $project->title) }}">
</div>

<div class="form-group py-3">
    <label class="py-2" for="url_github">
        URL Github
    </label>
    <input  class="form-control border-0 bg-light shadow-sm"
            id="url_github" 
            type="text" 
            name="url_github"
            value="{{ old('url_github', $project->url_github) }}">
</div>

<div class="form-group py-3 mb-2">
    <label class="py-2" for="description">
        Descripción del proyecto <br>
    </label>
    <textarea class="form-control border-0 bg-light shadow-sm" id="description" name="description">{{ old('description', $project->description) }}
    </textarea>
</div>

<label for="url" hidden>URL del proyecto <br>
    <input id="url" type="text" name="url" value="{{ old('url', $project->url) }}">
</label><br>
<input hidden id="user_id" type="text" name="user_id" value="{{auth()->user()->id}}">

<button class="btn btn-primary btn-lg btn-block form-control text-white">
    {{$buttonText}}
</button>
<a class="btn btn-lg btn-block form-control text-primary btn-link" href="{{route('projects.index')}}">Cancelar</a>