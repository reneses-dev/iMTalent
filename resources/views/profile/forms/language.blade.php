@if ($existProfile === 0)
    <div class="py-4">
        <div class="row align-items-center">
            <h6><b>IDIOMAS</b> <a id="agregarLanguage" class="btn"> +</a></h6>
            <hr>
            <div class="row" id="nuevoInputLanguage">
                <div class="row align-items-center">
                    <div class="col-md-1">
                        <span><b>Idioma: </b></span>
                    </div>
                    <div class="col-md-2 py-1">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="language" 
                            type="text" 
                            name="language">
                    </div>
                    <div class="col-md-1">
                        <span><b>Nivel: </b></span>
                    </div>
                    <div class="col-md-2 py-1">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="level" 
                            type="text" 
                            name="level">
                    </div>
                    <div class="col-md-1">
                        <span><b>Título: </b></span>
                    </div>
                    <div class="col-md-2 py-1">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="title_language" 
                            type="text" 
                            name="title_language">
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="row align-items-center py-4">
        <div>
            <h6><b>IDIOMAS</b></h6>
            <hr>
            @foreach ($languageProfile as $languageProfileItem)
                <div class="row align-items-center">
                    <div class="col-md-auto">
                        <span><b>Idioma: </b></span>
                    </div>
                    <div class="col-md-2">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="language_{{$languageProfileItem->id}}" 
                            type="text" 
                            name="language_{{$languageProfileItem->id}}"
                            placeholder="Idioma"
                            size="{{ strlen($languageProfileItem->language) }}"
                            value="{{ old('language', $languageProfileItem->language) }}">
                    </div>
                    <div class="col-md-auto">
                        <span><b>Nivel: </b></span>
                    </div>
                    <div class="col-md-2">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="level_{{$languageProfileItem->id}}" 
                            type="text" 
                            name="level_{{$languageProfileItem->id}}"
                            placeholder="Nivel"
                            size="{{ strlen($languageProfileItem->level) }}"
                            value="{{ old('level', $languageProfileItem->level) }}">
                    </div>
                    <div class="col-md-auto">
                        <span><b>Título: </b></span>
                    </div>
                    <div class="col-md-2">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="title_language_{{$languageProfileItem->id}}" 
                            type="text" 
                            name="title_language_{{$languageProfileItem->id}}"
                            placeholder="Título"
                            size="{{ strlen($languageProfileItem->title_language) }}"
                            value="{{ old('title_language', $languageProfileItem->title_language) }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif

<script>
    $(document).ready(function() {
       var max = 5;
       var min = 1;
       $("#agregarLanguage").click(function() {
           if (min < max) {
               var nuevoBloque = $("#nuevoInputLanguage").clone();
               nuevoBloque.find("input").each(function() {
                   var idOriginal = $(this).attr("id");
                   var nameOriginal = $(this).attr("name");
                   var nuevoID = idOriginal + "_" + min;
                   var nuevoName = nameOriginal + "_" + min;
                   $(this).attr("id", nuevoID).val("");
                   $(this).attr("name", nuevoName).val("");
               });
               $("#nuevoInputLanguage").after(nuevoBloque);
               min++;
           } else {
               alert("Se ha alcanzado el límite máximo de lenguas (5).");
           }
       });
   });
</script>