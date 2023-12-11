<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
    <div class="container">
        <a href="{{route('home')}}" class="navbar-brand">
           <b class="text-primary">{{config('app.name')}}</b>
        </a>
        <button class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="{{ __('Toggle navigation') }}">
                
                    <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="nav-pills nav">
                @guest
                    <a class="nav-link" href="{{route('login')}}">Login</a></li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">
                            @lang('Home')
                        </a>
                    </li>
                    @if (auth()->user()->role === 'talent')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('profile.index')}}">
                            @lang('About')
                        </a>
                    </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('profile.index_company')}}">
                                @lang('Profiles')
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('projects.index')}}">
                            @lang('Portfolio')
                        </a>
                    </li>
                    @if (auth()->user()->role === 'company')
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">
                                @lang('Contact')
                            </a>
                        </li>   
                    @endif
                    
                    <a  class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                @endguest
    
            </ul>
        </div>
    </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>