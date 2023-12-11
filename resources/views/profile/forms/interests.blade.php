@if ($existProfile === 0)
    <div class="py-4">
        <div class="row align-items-center">
            <h6><b>DATOS DE INTERÉS</b></h6>
            <hr>
            <div class="row">
                <div class="row align-items-center">
                    <div class="col-md-auto">
                        <span><b>Datos de interés: </b> <a id="agregarInterest" class="btn"> +</a></span>
                    </div>
                </div>
                <div class="col-md-6 py-1" id="nuevoInputInterest">
                    <input class="form-control border-0 bg-light shadow-sm text-center" 
                        id="interest" 
                        type="text" 
                        name="interest">
                </div>
            </div>
        </div>
    </div>
@else
    <div class="row align-items-center py-4">
        <div>
            <h6><b>DATOS DE INTERÉS</b></h6>
            <hr>
            @foreach ($interestProfile as $interestProfileItem)
                <div class="row align-items-center mt-2">
                    <div class="col-md-6 ">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="interest_{{$interestProfileItem->id}}" 
                            type="text" 
                            name="interest_{{$interestProfileItem->id}}"
                            placeholder="Datos de interés" 
                            value="{{ old('interest', $interestProfileItem->interest) }}">
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
       $("#agregarInterest").click(function() {
           if (min < max) {
               var nuevoBloque = $("#nuevoInputInterest").clone();
               nuevoBloque.find("input").each(function() {
                   var idOriginal = $(this).attr("id");
                   var nameOriginal = $(this).attr("name");
                   var nuevoID = idOriginal + "_" + min;
                   var nuevoName = nameOriginal + "_" + min;
                   $(this).attr("id", nuevoID).val("");
                   $(this).attr("name", nuevoName).val("");
               });
               $("#nuevoInputInterest").after(nuevoBloque);
               min++;
           } else {
               alert("Se ha alcanzado el límite máximo de datos de interés (5).");
           }
       });
   });
</script>