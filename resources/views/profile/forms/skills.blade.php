@if ($existProfile === 0)
    <div class="py-4">
        <div class="row align-items-center">
            <h6><b>COMPETENCIAS TECNOLÓGICAS</b></h6>
            <hr>
            <div class="row">
                <div class="row align-items-center">
                    <div class="col-md-auto">
                        <span><b>Lenguajes de programación: </b> <a id="agregarLenguajes" class="btn"> +</a></span>
                    </div>
                </div>
                <div class="col-md-2 py-1" id="nuevoInputLenguaje">
                    <input class="form-control border-0 bg-light shadow-sm text-center" 
                        id="programming_language" 
                        type="text" 
                        name="programming_language">
                </div>
            </div>
            <div class="row py-2">
                <div class="row align-items-center">
                    <div class="col-md-auto">
                        <span><b>Frameworks: </b> <a id="agregarFrameworks" class="btn"> +</a></span>
                    </div>
                </div>
                <div class="col-md-2 py-1" id="nuevoInputFramework">
                    <input class="form-control border-0 bg-light shadow-sm text-center" 
                        id="framework" 
                        type="text" 
                        name="framework">
                </div>
            </div>
            <div class="row py-2">
                <div class="row align-items-center">
                    <div class="col-md-auto">
                        <span><b>Lenguaje de marcas: </b> <a id="agregarMarkups" class="btn"> +</a></span>
                    </div>
                </div>
                <div class="col-md-2 py-1" id="nuevoInputMarkup">
                    <input class="form-control border-0 bg-light shadow-sm text-center" 
                        id="markup_language" 
                        type="text" 
                        name="markup_language">
                </div>
            </div>
            <div class="row py-2">
                <div class="row align-items-center">
                    <div class="col-md-auto">
                        <span><b>Bases de datos: </b> <a id="agregarDatabase" class="btn"> +</a></span>
                    </div>
                </div>
                <div class="col-md-2 py-1" id="nuevoInputDatabase">
                    <input class="form-control border-0 bg-light shadow-sm text-center" 
                        id="database" 
                        type="text" 
                        name="database">
                </div>
            </div>
            <div class="row py-2">
                <div class="row align-items-center">
                    <div class="col-md-auto">
                        <span><b>Control de versiones: </b> <a id="agregarControlVersion" class="btn"> +</a></span>
                    </div>
                </div>
                <div class="col-md-2 py-1" id="nuevoInputControlVersion">
                    <input class="form-control border-0 bg-light shadow-sm text-center" 
                        id="control_version" 
                        type="text" 
                        name="control_version">
                </div>
            </div>
            <div class="row py-2">
                <div class="row align-items-center">
                    <div class="col-md-auto">
                        <span><b>Otros: </b> <a id="agregarOther" class="btn"> +</a></span>
                    </div>
                </div>
                <div class="col-md-2 py-1" id="nuevoInputOther">
                    <input class="form-control border-0 bg-light shadow-sm text-center" 
                        id="other" 
                        type="text" 
                        name="other">
                </div>
            </div>
        </div>
    </div>
@else
    <div class="row align-items-center py-4">
        <div>
            <h6><b>COMPETENCIAS TECNOLOGICAS</b></h6>
            <hr>
            @foreach ($skillsProfile as $skillsProfileItem)
                <div class="row align-items-center">
                    <div class="col-md-auto">
                        <span><b>Lenguajes de programación: </b></span>
                    </div>
                    <div class="col-md-auto px-1">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="programming_language" 
                            type="text" 
                            name="programming_language"
                            placeholder="Lenguaje de programación"
                            size="{{ strlen($skillsProfileItem->programming_language) }}" 
                            value="{{ old('programming_language', $skillsProfileItem->programming_language) }}">
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->programming_language_2) && $skillsProfileItem->programming_language_2 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="programming_language_2" 
                            type="text" 
                            name="programming_language_2"
                            placeholder="Lenguaje de programación" 
                            size="{{ strlen($skillsProfileItem->programming_language_2) }}"
                            value="{{ old('programming_language_2', $skillsProfileItem->programming_language_2) }}">
                        @endif
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->programming_language_3) && $skillsProfileItem->programming_language_3 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="programming_language_3" 
                            type="text" 
                            name="programming_language_3"
                            placeholder="Lenguaje de programación"
                            size="{{ strlen($skillsProfileItem->programming_language_3) }}" 
                            value="{{ old('programming_language_3', $skillsProfileItem->programming_language_3) }}">
                        @endif
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->programming_language_4) && $skillsProfileItem->programming_language_4 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="programming_language_4" 
                            type="text" 
                            name="programming_language_4"
                            placeholder="Lenguaje de programación"
                            size="{{ strlen($skillsProfileItem->programming_language_4) }}" 
                            value="{{ old('programming_language_4', $skillsProfileItem->programming_language_4) }}">
                        @endif                    
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->programming_language_5) && $skillsProfileItem->programming_language_5 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="programming_language_5" 
                            type="text" 
                            name="programming_language_5"
                            placeholder="Lenguaje de programación"
                            size="{{ strlen($skillsProfileItem->programming_language_5) }}"
                            value="{{ old('programming_language_5', $skillsProfileItem->programming_language_5) }}">
                        @endif   
                    </div>
                </div>

                <div class="row mt-2 align-items-center">
                    <div class="col-md-auto">
                        <span><b>Frameworks: </b></span>
                    </div>
                    <div class="col-md-auto px-1">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="framework" 
                            type="text" 
                            name="framework"
                            placeholder="Framework"
                            size="{{ strlen($skillsProfileItem->framework) }}" 
                            value="{{ old('framework', $skillsProfileItem->framework) }}">
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->framework_2) && $skillsProfileItem->framework_2 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="framework_2" 
                            type="text" 
                            name="framework_2"
                            placeholder="Lenguaje de programación"
                            size="{{ strlen($skillsProfileItem->framework_2) }}" 
                            value="{{ old('framework_2', $skillsProfileItem->framework_2) }}">
                        @endif
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->framework_3) && $skillsProfileItem->framework_3 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="framework_3" 
                            type="text" 
                            name="framework_3"
                            placeholder="Lenguaje de programación" 
                            size="{{ strlen($skillsProfileItem->framework_3) }}"
                            value="{{ old('framework_3', $skillsProfileItem->framework_3) }}">
                        @endif
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->framework_4) && $skillsProfileItem->framework_4 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="framework_4" 
                            type="text" 
                            name="framework_4"
                            placeholder="Lenguaje de programación"
                            size="{{ strlen($skillsProfileItem->framework_4) }}" 
                            value="{{ old('framework_4', $skillsProfileItem->framework_4) }}">
                        @endif                    
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->framework_5) && $skillsProfileItem->framework_5 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="framework_5" 
                            type="text" 
                            name="framework_5"
                            placeholder="Lenguaje de programación"
                            size="{{ strlen($skillsProfileItem->framework_5) }}"  
                            value="{{ old('framework_5', $skillsProfileItem->framework_5) }}">
                        @endif   
                    </div>
                </div>
                <div class="row mt-2 align-items-center">
                    <div class="col-md-auto">
                        <span><b>Lenguaje de marcas: </b></span>
                    </div>
                    <div class="col-md-auto px-1">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="markup_language" 
                            type="text" 
                            name="markup_language"
                            placeholder="Lenguaje de marcas"
                            size="{{ strlen($skillsProfileItem->markup_language) }}"  
                            value="{{ old('markup_language', $skillsProfileItem->markup_language) }}">
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->markup_language_2) && $skillsProfileItem->markup_language_2 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="markup_language_2" 
                            type="text" 
                            name="markup_language_2"
                            placeholder="Lenguaje de marcas"
                            size="{{ strlen($skillsProfileItem->markup_language_2) }}" 
                            value="{{ old('markup_language_2', $skillsProfileItem->markup_language_2) }}">
                        @endif
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->markup_language_3) && $skillsProfileItem->markup_language_3 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="markup_language_3" 
                            type="text" 
                            name="markup_language_3"
                            placeholder="Lenguaje de marcas"
                            size="{{ strlen($skillsProfileItem->markup_language_3) }}"  
                            value="{{ old('markup_language_3', $skillsProfileItem->markup_language_3) }}">
                        @endif
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->markup_language_4) && $skillsProfileItem->markup_language_4 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="markup_language_4" 
                            type="text" 
                            name="markup_language_4"
                            placeholder="Lenguaje de marcas"
                            size="{{ strlen($skillsProfileItem->markup_language_4) }}"
                            value="{{ old('markup_language_4', $skillsProfileItem->markup_language_4) }}">
                        @endif                    
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->markup_language_5) && $skillsProfileItem->markup_language_5 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="markup_language_5" 
                            type="text" 
                            name="markup_language_5"
                            placeholder="Lenguaje de marcas"
                            size="{{ strlen($skillsProfileItem->markup_language_5) }}"  
                            value="{{ old('markup_language_5', $skillsProfileItem->markup_language_5) }}">
                        @endif 
                    </div>
                </div>

                <div class="row mt-2 align-items-center">
                    <div class="col-md-auto ">
                        <span><b>Bases de datos: </b></span>
                    </div>
                    <div class="col-md-auto px-1">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="database" 
                            type="text" 
                            name="database"
                            placeholder="Bases de datos"
                            size="{{ strlen($skillsProfileItem->database) }}"  
                            value="{{ old('database', $skillsProfileItem->database) }}">
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->database_2) && $skillsProfileItem->database_2 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="database_2" 
                            type="text" 
                            name="database_2"
                            placeholder="Bases de datos"
                            size="{{ strlen($skillsProfileItem->database_2) }}" 
                            value="{{ old('database_2', $skillsProfileItem->database_2) }}">
                        @endif
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->database_3) && $skillsProfileItem->database_3 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="database_3" 
                            type="text" 
                            name="database_3"
                            placeholder="Bases de datos"
                            size="{{ strlen($skillsProfileItem->database_3) }}"
                            value="{{ old('database_3', $skillsProfileItem->database_3) }}">
                        @endif
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->database_4) && $skillsProfileItem->database_4 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="database_4" 
                            type="text" 
                            name="database_4"
                            placeholder="Bases de datos"
                            size="{{ strlen($skillsProfileItem->database_4) }}" 
                            value="{{ old('database_4', $skillsProfileItem->database_4) }}">
                        @endif                    
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->database_5) && $skillsProfileItem->database_5 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="database_5" 
                            type="text" 
                            name="database_5"
                            placeholder="Bases de datos"
                            size="{{ strlen($skillsProfileItem->database_5) }}" 
                            value="{{ old('database_5', $skillsProfileItem->database_5) }}">
                        @endif 
                    </div>
                </div>
                <div class="row mt-2 align-items-center">
                    <div class="col-md-auto">
                        <span><b>Control de versiones: </b></span>
                    </div>
                    <div class="col-md-auto px-1">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="control_version" 
                            type="text" 
                            name="control_version"
                            placeholder="Control de versiones"
                            size="{{ strlen($skillsProfileItem->control_version) }}"  
                            value="{{ old('control_version', $skillsProfileItem->control_version) }}">
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->control_version_2) && $skillsProfileItem->control_version_2 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="control_version_2" 
                            type="text" 
                            name="control_version_2"
                            placeholder="Control de versiones"
                            size="{{ strlen($skillsProfileItem->control_version_2) }}" 
                            value="{{ old('control_version_2', $skillsProfileItem->control_version_2) }}">
                        @endif
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->control_version_3) && $skillsProfileItem->control_version_3 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="control_version_3" 
                            type="text" 
                            name="control_version_3"
                            placeholder="Control de versiones"
                            size="{{ strlen($skillsProfileItem->control_version_3) }}"
                            value="{{ old('control_version_3', $skillsProfileItem->control_version_3) }}">
                        @endif
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->control_version_4) && $skillsProfileItem->control_version_4 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="control_version_4" 
                            type="text" 
                            name="control_version_4"
                            placeholder="Control de versiones"
                            size="{{ strlen($skillsProfileItem->control_version_4) }}"
                            value="{{ old('control_version_4', $skillsProfileItem->control_version_4) }}">
                        @endif                   
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->control_version_5) && $skillsProfileItem->control_version_5 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="control_version_5" 
                            type="text" 
                            name="control_version_5"
                            placeholder="Control de versiones"
                            size="{{ strlen($skillsProfileItem->control_version_5) }}"
                            value="{{ old('control_version_5', $skillsProfileItem->control_version_5) }}">
                        @endif 
                    </div>
                </div>
                <div class="row mt-2 align-items-center">
                    <div class="col-md-auto">
                        <span><b>Otros: </b></span>
                    </div>
                    <div class="col-md-auto px-1">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="other" 
                            type="text" 
                            name="other"
                            placeholder="Otras herramientas/skills"
                            size="{{ strlen($skillsProfileItem->other) }}"
                            value="{{ old('other', $skillsProfileItem->other) }}">
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->other_2) && $skillsProfileItem->other_2 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="other_2" 
                            type="text" 
                            name="other_2"
                            placeholder="Otras herramientas/skills"
                            size="{{ strlen($skillsProfileItem->other_2) }}"
                            value="{{ old('other_2', $skillsProfileItem->other_2) }}">
                        @endif
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->other_3) && $skillsProfileItem->other_3 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="other_3" 
                            type="text" 
                            name="other_3"
                            placeholder="Otras herramientas/skills"
                            size="{{ strlen($skillsProfileItem->other_3) }}"
                            value="{{ old('other_3', $skillsProfileItem->other_3) }}">
                        @endif
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->other_4) && $skillsProfileItem->other_4 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="other_4" 
                            type="text" 
                            name="other_4"
                            placeholder="Otras herramientas/skills"
                            size="{{ strlen($skillsProfileItem->other_4) }}"
                            value="{{ old('other_4', $skillsProfileItem->other_4) }}">
                        @endif                  
                    </div>
                    <div class="col-md-auto px-1">
                        @if(isset($skillsProfileItem->other_5) && $skillsProfileItem->other_5 !== '')
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="other_5" 
                            type="text" 
                            name="other_5"
                            placeholder="Otras herramientas/skills"
                            size="{{ strlen($skillsProfileItem->other_5) }}" 
                            value="{{ old('other_5', $skillsProfileItem->other_5) }}">
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>   
@endif
<script>
    // Evento de clic en el botón "Agregar Lenguajes"
    $(document).ready(function() {
       var max = 5;
       var min = 1;
       $("#agregarLenguajes").click(function() {
           if (min < max) {
               var nuevoBloque = $("#nuevoInputLenguaje").clone();
               nuevoBloque.find("input").each(function() {
                   var idOriginal = $(this).attr("id");
                   var nameOriginal = $(this).attr("name");
                   var nuevoID = idOriginal + "_" + (min + 1);
                   var nuevoName = nameOriginal + "_" + (min + 1);
                   $(this).attr("id", nuevoID).val("");
                   $(this).attr("name", nuevoName).val("");
               });
               $("#nuevoInputLenguaje").after(nuevoBloque);
               min++;
           } else {
               alert("Se ha alcanzado el límite máximo de lenguajes (5).");
           }
       });
   });
   // Evento de clic en el botón "Agregar Frameworks"
   $(document).ready(function() {
       var max = 5;
       var min = 1;
       $("#agregarFrameworks").click(function() {
           if (min < max) {
               var nuevoBloque = $("#nuevoInputFramework").clone();
               nuevoBloque.find("input").each(function() {
                   var idOriginal = $(this).attr("id");
                   var nameOriginal = $(this).attr("name");
                   var nuevoID = idOriginal + "_" + (min + 1);
                   var nuevoName = nameOriginal + "_" + (min + 1);
                   $(this).attr("id", nuevoID).val("");
                   $(this).attr("name", nuevoName).val("");
               });
               $("#nuevoInputFramework").after(nuevoBloque);
               min++;
           } else {
               alert("Se ha alcanzado el límite máximo de frameworks (5).");
           }
       });
   });
   // Evento de clic en el botón "Agregar Markups"
   $(document).ready(function() {
       var max = 5;
       var min = 1;
       $("#agregarMarkups").click(function() {
           if (min < max) {
               var nuevoBloque = $("#nuevoInputMarkup").clone();
               nuevoBloque.find("input").each(function() {
                   var idOriginal = $(this).attr("id");
                   var nameOriginal = $(this).attr("name");
                   var nuevoID = idOriginal + "_" + (min + 1);
                   var nuevoName = nameOriginal + "_" + (min + 1);
                   $(this).attr("id", nuevoID).val("");
                   $(this).attr("name", nuevoName).val("");
               });

               $("#nuevoInputMarkup").after(nuevoBloque);
               min++;
           } else {
               alert("Se ha alcanzado el límite máximo de lenguajes de marcas (5).");
           }
       });
   });
   // Evento de clic en el botón "Agregar Database"
   $(document).ready(function() {
       var max = 5;
       var min = 1;
       $("#agregarDatabase").click(function() {
           if (min < max) {
               var nuevoBloque = $("#nuevoInputDatabase").clone();
               nuevoBloque.find("input").each(function() {
                   var idOriginal = $(this).attr("id");
                   var nameOriginal = $(this).attr("name");
                   var nuevoID = idOriginal + "_" + (min + 1);
                   var nuevoName = nameOriginal + "_" + (min + 1);
                   $(this).attr("id", nuevoID).val("");
                   $(this).attr("name", nuevoName).val("");
               });
               $("#nuevoInputDatabase").after(nuevoBloque);
               min++;
           } else {
               alert("Se ha alcanzado el límite máximo de bases de datos (5).");
           }
       });
   });
   // Evento de clic en el botón "Agregar Control de versiones"
   $(document).ready(function() {
       var max = 5;
       var min = 1;
       $("#agregarControlVersion").click(function() {
           if (min < max) {
               var nuevoBloque = $("#nuevoInputControlVersion").clone();
               nuevoBloque.find("input").each(function() {
                   var idOriginal = $(this).attr("id");
                   var nameOriginal = $(this).attr("name");
                   var nuevoID = idOriginal + "_" + (min + 1);
                   var nuevoName = nameOriginal + "_" + (min + 1);
                   $(this).attr("id", nuevoID).val("");
                   $(this).attr("name", nuevoName).val("");
               });
               $("#nuevoInputControlVersion").after(nuevoBloque);
               min++;
           } else {
               alert("Se ha alcanzado el límite máximo de control de versiones (5).");
           }
       });
   });
   // Evento de clic en el botón "Agregar Control de versiones"
   $(document).ready(function() {
       var max = 5;
       var min = 1;
       $("#agregarOther").click(function() {
           if (min < max) {
               var nuevoBloque = $("#nuevoInputOther").clone();
               nuevoBloque.find("input").each(function() {
                   var idOriginal = $(this).attr("id");
                   var nameOriginal = $(this).attr("name");
                   var nuevoID = idOriginal + "_" + (min + 1);
                   var nuevoName = nameOriginal + "_" + (min + 1);
                   $(this).attr("id", nuevoID).val("");
                   $(this).attr("name", nuevoName).val("");
               });
               $("#nuevoInputOther").after(nuevoBloque);
               min++;
           } else {
               alert("Se ha alcanzado el límite máximo de otras herramientas (5).");
           }
       });
   });
</script>