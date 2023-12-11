@if ($existProfile === 0)
    <div class="py-4">
        <div class="row align-items-center">
            <h6><b>CONTACTO</b></h6>
            <hr>
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <span><b>Nombre: </b></span>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="name" 
                            type="text" 
                            name="name"
                            placeholder="Nombre">
                    </div> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <span><b>Apellidos: </b></span>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="surnames" 
                            type="text" 
                            name="surnames"
                            placeholder="Apellidos">
                    </div> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <span><b>Profesión: </b></span>
                    </div>
                    <div class="col-md-9 py-1">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="profession" 
                            type="text" 
                            name="profession"
                            placeholder="Profesión"
                            size="{{ strlen('Desarrollador web') }}">
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
                            id="location" 
                            type="text" 
                            name="location"
                            placeholder="Localidad">
                    </div> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <span><b>Código postal: </b></span>
                    </div>
                    <div class="col-md-8 py-1">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="zip_code" 
                            type="text" 
                            name="zip_code"
                            placeholder="Código postal">
                    </div> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <span><b>Teléfono: </b></span>
                    </div>
                    <div class="col-md-9 py-1">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="phone" 
                            type="text" 
                            name="phone"
                            placeholder="Teléfono">
                    </div> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <span><b>Email: </b></span>
                    </div>
                    <div class="col-md-10 py-1">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="email" 
                            type="text" 
                            name="email"
                            placeholder="Correo electrónico">
                    </div> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <span><b>LinkedIn: </b></span>
                    </div>
                    <div class="col-md-9 py-1">
                        <input class="form-control border-0 bg-light shadow-sm text-center" 
                            id="url_linkedIn" 
                            type="text" 
                            name="url_linkedIn"
                            placeholder="URL LinkedIn">
                    </div> 
                </div>
            </div>
        </div>
    </div>
@else
<div class="py-4">
    <div class="row align-items-center">
        <h6><b>CONTACTO</b></h6>
        <hr>
        @foreach ($userProfile as $userProfileItem)
            <div class="col-md-1">
                <span><b>Nombre: </b></span>
            </div>
            <div class="col-md-auto">
                <input class="form-control border-0 bg-light shadow-sm text-center" 
                    id="name" 
                    type="text" 
                    name="name"
                    placeholder="Nombre"
                    size="{{ strlen($userProfileItem->name) }}" 
                    value="{{ old('name', $userProfileItem->name) }}">
            </div>
            <div class="col-md-auto">
                <span><b>Apellidos: </b></span>
            </div>
            <div class="col-md-auto p-1">
                <input class="form-control border-0 bg-light shadow-sm text-center" 
                    id="surnames" 
                    type="text" 
                    name="surnames"
                    placeholder="Apellidos"
                    size="{{ strlen($userProfileItem->surnames) }}" 
                    value="{{ old('surnames', $userProfileItem->surnames) }}">
            </div>
            <div class="col-md-auto">
                <span><b>Profesión: </b></span>
            </div>
            <div class="col-md-auto">
                <input class="form-control border-0 bg-light shadow-sm text-center" 
                    id="profession" 
                    type="text" 
                    name="profession"
                    placeholder="Profesión"
                    size="{{ strlen($userProfileItem->profession) }}"  
                    value="{{ old('profession', $userProfileItem->profession) }}">
            </div>
        @endforeach
    </div>
    <div class="row align-items-center mt-2">
        @foreach ($contactProfile as $contactProfileItem)
            <div class="col-md-auto">
                <span><b>Localidad: </b></span>
            </div>
            <div class="col-md-auto">
                <input class="form-control border-0 bg-light shadow-sm text-center" 
                id="location" 
                type="text" 
                name="location"
                placeholder="Localidad"
                size="{{ strlen($contactProfileItem->location) }}" 
                value="{{ old('location', $contactProfileItem->location) }}">
            </div>
            <div class="col-md-auto">
                <span><b>Código postal: </b></span>
            </div>
            <div class="col-md-auto">
                <input class="form-control border-0 bg-light shadow-sm text-center" 
                id="zip_code" 
                type="text" 
                name="zip_code"
                placeholder="Código postal"
                size="{{ strlen($contactProfileItem->zip_code) }}"  
                value="{{ old('zip_code', $contactProfileItem->zip_code) }}">
            </div>
            <div class="col-md-auto">
                <span><b>Teléfono: </b></span>
            </div>
            <div class="col-md-auto">
                <input class="form-control border-0 bg-light shadow-sm text-center" 
                id="phone" 
                type="text" 
                name="phone"
                placeholder="Teléfono"
                size="{{ strlen($contactProfileItem->phone) }}"  
                value="{{ old('phone', $contactProfileItem->phone) }}">
            </div>
        </div>
        <div class="row align-items-center mt-2">
            <div class="col-md-auto">
                <span><b>Correo: </b></span>
            </div>
            <div class="col-md-auto">
                <input class="form-control border-0 bg-light shadow-sm text-center" 
                id="email" 
                type="text" 
                name="email"
                placeholder="Correo electrónico"
                size="{{ strlen($contactProfileItem->email) }}"  
                value="{{ old('email', $contactProfileItem->email) }}">
            </div>     
        @endforeach
            <div class="col-md-auto">
                <span><b>LinkedIn: </b></span>
            </div>
        @foreach ($urlsProfile as $urlProfileItem)
            <div class="col-md-6">
                <input class="form-control border-0 bg-light shadow-sm text-center" 
                id="url_linkedIn" 
                type="text" 
                name="url_linkedIn"
                placeholder="URL LinkedIn" 
                value="{{ old('url_linkedIn', $urlProfileItem->url_linkedIn) }}">
            </div>
        @endforeach 
    </div>
</div>
@endif
