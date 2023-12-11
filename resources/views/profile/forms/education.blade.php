@if ($existProfile === 0)
    <div class="py-4">
        <div class="row align-items-center">
            <h6><b>FORMACIÓN ACADÉMICA</b><a id="agregarFormacion" class="btn">+</a></h6>
            <hr>
            <div class="row py-2" id="formacionAcademica">
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <span><b>Título: </b></span>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select text-center" id="title" name="title">
                                <option value="Certificado">Certificado</option>
                                <option value="CFGM">Grado medio</option>
                                <option value="CFGS">Grado superior</option>
                                <option value="Universidad">Universidad</option>
                                <option value="Máster">Máster</option>
                                <option value="Doctorado">Doctorado</option>
                            </select>
                        </div> 
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <span><b>Nombre título:</b></span>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control border-0 bg-light shadow-sm text-center" 
                                id="name_title" 
                                type="text" 
                                name="name_title"
                                placeholder="Nombre del título">
                        </div> 
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <span><b>Inicio: </b></span>
                        </div>
                        <div class="col-md-9 py-1">
                            <input class="form-control border-0 bg-light shadow-sm text-center" 
                                id="start_year" 
                                type="date" 
                                name="start_year"
                                placeholder="Fecha de inicio">
                        </div> 
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <span><b>Finalización: </b></span>
                        </div>
                        <div class="col-md-9 py-1">
                            <input class="form-control border-0 bg-light shadow-sm text-center" 
                                id="end_year" 
                                type="date" 
                                name="end_year"
                                placeholder="Fecha de finalización">
                        </div> 
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <span><b>Localidad: </b></span>
                        </div>
                        <div class="col-md-9 py-1">
                            <input class="form-control border-0 bg-light shadow-sm text-center" 
                                id="location_academic" 
                                type="text" 
                                name="location_academic"
                                placeholder="Localidad">
                        </div> 
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <span><b>Centro de estudios: </b></span>
                        </div>
                        <div class="col-md-9 py-1">
                            <input class="form-control border-0 bg-light shadow-sm text-center" 
                                id="institution" 
                                type="text" 
                                name="institution"
                                placeholder="Centro académico">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>  
@else
    <div class="row align-items-center py-4">
        <h6><b>FORMACIÓN ACADÉMICA</b></h6>
        <hr>
        @foreach ($educationProfile as $educationProfileItem)
        <div class="row align-items-center mt-2">
            <div class="col-md-1">
                <span><b>Título: </b></span>
            </div>
            <div class="col-md-auto p-1">
                <select class="form-select" id="title_{{$educationProfileItem->id}}" name="title_{{$educationProfileItem->id}}">
                    <option value="{{ $educationProfileItem->title }}">{{ old('title', $educationProfileItem->title) }}</option>
                    <option value="Certificado">Certificado</option>
                    <option value="CFGM">Grado medio</option>
                    <option value="CFGS">Grado superior</option>
                    <option value="Universidad">Universidad</option>
                    <option value="Máster">Máster</option>
                    <option value="Doctorado">Doctorado</option>
                </select>
            </div>
            <div class="col-md-auto p-1 mx-2">
                <span><b>Nombre título: </b></span>
            </div>
            <div class="col-md-auto p-1">
                <input class="form-control border-0 bg-light shadow-sm text-center" 
                id="name_title_{{$educationProfileItem->id}}" 
                type="text" 
                name="name_title_{{$educationProfileItem->id}}"
                placeholder="Nombre del título"
                size="{{ strlen($educationProfileItem->name_title) }}"
                value="{{ old('name_title', $educationProfileItem->name_title) }}">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-auto">
                <span><b>Inicio: </b></span>
            </div>
            <div class="col-md-auto p-1">
                <input class="form-control border-0 bg-light shadow-sm text-center" 
                id="start_year_{{$educationProfileItem->id}}" 
                type="date" 
                name="start_year_{{$educationProfileItem->id}}"
                placeholder="Fecha de inicio"
                size="{{ strlen($educationProfileItem->start_year) }}" 
                value="{{ old('start_year', $educationProfileItem->start_year) }}">
            </div>
            <div class="col-md-auto">
                <span><b>Finalización: </b></span>
            </div>
            <div class="col-md-auto p-1">
                <input class="form-control border-0 bg-light shadow-sm text-center" 
                id="end_year_{{$educationProfileItem->id}}" 
                type="date" 
                name="end_year_{{$educationProfileItem->id}}"
                placeholder="Fecha de finalización"
                size="{{ strlen($educationProfileItem->end_year) }}" 
                value="{{ old('end_year', $educationProfileItem->end_year) }}">
            </div>
            <div class="col-md-auto p-1">
                <span><b>Localidad: </b></span>
            </div>
            <div class="col-md-auto">
                <input class="form-control border-0 bg-light shadow-sm text-center" 
                id="location_academic_{{$educationProfileItem->id}}" 
                type="text" 
                name="location_academic_{{$educationProfileItem->id}}"
                placeholder="Localidad"
                size="{{ strlen($educationProfileItem->location_academic) }}"
                value="{{ old('location_academic', $educationProfileItem->location_academic) }}">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-auto">
                <span><b>Centro de estudios: </b></span>
            </div>
            <div class="col-md-6 mt-2">
                <input class="form-control border-0 bg-light shadow-sm text-center" 
                id="institution_{{$educationProfileItem->id}}" 
                type="text" 
                name="institution_{{$educationProfileItem->id}}"
                placeholder="Centro académico" 
                value="{{ old('institution', $educationProfileItem->institution) }}">
            </div>
        </div>
        @endforeach
    </div>
@endif
<script>
     $(document).ready(function() {
        var maxFormaciones = 4;
        var formacionCount = 1;
        $("#agregarFormacion").click(function() {
            if (formacionCount < maxFormaciones) {
                var nuevoBloque = $("#formacionAcademica").clone();
                nuevoBloque.find("select, input").each(function() {
                    var idOriginal = $(this).attr("id");
                    var nameOriginal = $(this).attr("name");
                    var nuevoID = idOriginal + "_" + formacionCount;
                    var nuevoName = nameOriginal + "_" + formacionCount;
                    $(this).attr("id", nuevoID).val("");
                    $(this).attr("name", nuevoName).val("");
                });
                $("#formacionAcademica").after(nuevoBloque);
                formacionCount++;
            } else {
                alert("Se ha alcanzado el límite máximo de formaciones académicas (4).");
            }
        });
    });
</script>