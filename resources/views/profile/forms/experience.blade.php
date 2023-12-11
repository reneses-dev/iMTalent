@if ($existProfile === 0)
    <div class="py-4">
        <div class="row align-items-center">
            <h6><b>EXPERIENCIA LABORAL</b> <a id="agregarDescripcion" class="btn"> +</a></h6>
            <hr>
            <div class="row" id="descripcionEmpresa">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <span><b>Empresa: </b></span>
                            </div>
                            <div class="col-md-7">
                                <input class="form-control border-0 bg-light shadow-sm text-center" 
                                    id="name_company" 
                                    type="text" 
                                    name="name_company"
                                    placeholder="Nombre">
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <span><b>Inicio: </b></span>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control border-0 bg-light shadow-sm text-center" 
                                    id="start_date" 
                                    type="date" 
                                    name="start_date"
                                    placeholder="Fecha de inicio">
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <span><b>Fin:</b></span>
                            </div>
                            <div class="col-md-9">
                                <input class="form-control border-0 bg-light shadow-sm text-center" 
                                    id="end_date" 
                                    type="date" 
                                    name="end_date"
                                    placeholder="Fecha de finalización">
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-auto">
                                <span><b>Descripciones de las tareas realizadas en la empresa: </b></span>
                            </div>
                            <div class="col-md-5 px-1">
                                <p class="text-black-50">( * Requerida )</p>
                            </div>
                        </div>
                        <div class="col-md-12 py-1">
                            <input class="form-control border-0 bg-light shadow-sm text-center" 
                                id="description_1" 
                                type="text" 
                                name="description_1"
                                placeholder="*">
                        </div>
                        <div class="col-md-12 py-1">
                            <input class="form-control border-0 bg-light shadow-sm text-center" 
                                id="description_2" 
                                type="text" 
                                name="description_2">
                        </div>
                        <div class="col-md-12 py-1">
                            <input class="form-control border-0 bg-light shadow-sm text-center" 
                                id="description_3" 
                                type="text" 
                                name="description_3">
                        </div>
                        <div class="col-md-12 py-1">
                            <input class="form-control border-0 bg-light shadow-sm text-center" 
                                id="description_4" 
                                type="text" 
                                name="description_4">
                        </div>
                        <div class="col-md-12 py-1">
                            <input class="form-control border-0 bg-light shadow-sm text-center" 
                                id="description_5" 
                                type="text" 
                                name="description_5">
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@else
    <div class="row align-items-center py-4">
        <div class="mt-2">
            <h6><b>EXPERIENCIA LABORAL</b></h6>
            <hr>
            @foreach ($experienceProfile as $experienceProfileItem)
            <div class="row align-items-center">
                <div class="col-md-auto">
                    <span><b>Empresa: </b></span>
                </div>
                <div class="col-md-2 p-1">
                    <input class="form-control border-0 bg-light shadow-sm text-center" 
                        id="name_company_{{$experienceProfileItem->id}}" 
                        type="text" 
                        name="name_company_{{$experienceProfileItem->id}}"
                        placeholder="Nombre de la empresa"
                        size="{{ strlen($experienceProfileItem->name_company) }}"  
                        value="{{ old('name_company', $experienceProfileItem->name_company) }}">
                </div>
                <div class="col-md-auto">
                    <span><b>Inicio: </b></span>
                </div>
                <div class="col-md-auto p-1">
                    <input class="form-control border-0 bg-light shadow-sm text-center" 
                        id="start_date_{{$experienceProfileItem->id}}" 
                        type="date" 
                        name="start_date_{{$experienceProfileItem->id}}"
                        placeholder="Fecha de inicio"
                        size="{{ strlen($experienceProfileItem->start_date) }}"  
                        value="{{ old('start_date', $experienceProfileItem->start_date) }}">
                </div>
                <div class="col-md-auto">
                    <span><b>finalización: </b></span>
                </div>
                <div class="col-md-auto p-1">
                    <input class="form-control border-0 bg-light shadow-sm text-center" 
                        id="end_date_{{$experienceProfileItem->id}}" 
                        type="date" 
                        name="end_date_{{$experienceProfileItem->id}}"
                        placeholder="Fecha de finalización"
                        size="{{ strlen($experienceProfileItem->end_date) }}"  
                        value="{{ old('end_date', $experienceProfileItem->end_date) }}">
                </div>
            </div>
            <div class="row p-1">
                <div class="col-md-auto p-1">
                    <input class="form-control border-0 bg-light shadow-sm text-left p-1" 
                    id="description_1_{{$experienceProfileItem->id}}" 
                    type="text" 
                    name="description_1_{{$experienceProfileItem->id}}"
                    placeholder="Descripción"
                    size="{{ strlen($experienceProfileItem->description_1) }}"  
                    value="{{ old('description_1', $experienceProfileItem->description_1) }}">

                @if(isset($experienceProfileItem->description_2) && $experienceProfileItem->description_2 !== '')
                    <input class="form-control border-0 bg-light shadow-sm text-left p-1" 
                        id="description_2_{{$experienceProfileItem->id}}" 
                        type="text" 
                        name="description_2_{{$experienceProfileItem->id}}"
                        placeholder="Descripción"
                        size="{{ strlen($experienceProfileItem->description_2) }}"  
                        value="{{ old('description_2', $experienceProfileItem->description_2) }}">
                @endif
                @if(isset($experienceProfileItem->description_3) && $experienceProfileItem->description_3 !== '')
                    <input class="form-control border-0 bg-light shadow-sm text-left p-1" 
                        id="description_3_{{$experienceProfileItem->id}}" 
                        type="text" 
                        name="description_3_{{$experienceProfileItem->id}}"
                        placeholder="Descripción"
                        size="{{ strlen($experienceProfileItem->description_3) }}"  
                        value="{{ old('description_3', $experienceProfileItem->description_3) }}">
                @endif
                @if(isset($experienceProfileItem->description_4) && $experienceProfileItem->description_4 !== '')
                    <input class="form-control border-0 bg-light shadow-sm text-left p-1" 
                        id="description_4_{{$experienceProfileItem->id}}" 
                        type="text" 
                        name="description_4_{{$experienceProfileItem->id}}"
                        placeholder="Descripción"
                        size="{{ strlen($experienceProfileItem->description_4) }}"  
                        value="{{ old('description_4', $experienceProfileItem->description_4) }}">
                @endif
                @if(isset($experienceProfileItem->description_5) && $experienceProfileItem->description_5 !== '')
                    <input class="form-control border-0 bg-light shadow-sm text-left p-1" 
                        id="description_5_{{$experienceProfileItem->id}}" 
                        type="text" 
                        name="description_5_{{$experienceProfileItem->id}}"
                        placeholder="Descripción"
                        size="{{ strlen($experienceProfileItem->description_5) }}"  
                        value="{{ old('description_5', $experienceProfileItem->description_5) }}">
                @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endif

<script>
     $(document).ready(function() {
        var maxDescripciones = 5;
        var descripcionCount = 1;
        $("#agregarDescripcion").click(function() {
            if (descripcionCount < maxDescripciones) {
                var nuevoBloque = $("#descripcionEmpresa").clone();
                nuevoBloque.find("input").each(function() {
                    var idOriginal = $(this).attr("id");
                    var nameOriginal = $(this).attr("name");
                    var nuevoID = idOriginal + "_" + descripcionCount;
                    var nuevoName = nameOriginal + "_" + descripcionCount;
                    $(this).attr("id", nuevoID).val("");
                    $(this).attr("name", nuevoName).val("");
                });
                $("#descripcionEmpresa").after(nuevoBloque);
                descripcionCount++;
            } else {
                alert("Se ha alcanzado el límite máximo de descripciones (5).");
            }
        });
    });
</script>