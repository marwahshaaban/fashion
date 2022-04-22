<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/main.js') }}" defer></script> 

    <!-- Vendor JS Files -->
  <script src="{{ asset('js/vendor/aos.js') }}"></script>
  <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/vendor/glightbox.min.js"')}}"></script>
  <script src="{{ asset('js/vendor/isotope.pkgd.min.js"')}}"></script>
  <script src="{{ asset('js/vendor/swiper-bundle.min.js"')}}"></script>
  <script src="{{ asset('js/vendor/noframework.waypoints.js"')}}"></script>
  <script src="{{ asset('js/vendor/validate.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- Vendor  CSS --}} 
    <link href="{{ asset('css/vendor/animate.css/animate.min.css') }}" rel="stylesheet"> 
     
    <link href="{{ asset('css/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  
</head>
<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center"> 
            <h1 class="logo me-auto"><a href="{{ url('/fashion') }}"><span>Fash</span>ion</a></h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="{{ url('/homee') }}" class="active">Home</a></li>
                    <li> <a  href="{{ url('/about') }}">ABOUT
                    </a> </li>
                    <li> <a  href="{{ url('/myinfo') }}">Profile
                    </a></li>
                    {{-- <li> <a  href="{{ url('/showupdateinfo') }}">UPDATE INFORMATIONS
                    </a> </li> --}} 
                    {{-- <li> <a  href="{{ url('/products') }}">Clothes
                    </a></li> --}}
                    
                    @if (Auth::user()!=null)
                        @if (Auth::user()->role=="admin")
                        <li> <a href="{{ url('/allusers') }}">ALL USERS
                        </a>  </li> 
                         <li> <a  href="{{route('products.create')}}">ADD PRODUCT</a></li>

                        @endif
                    @endif
                    @if (Auth::user()!=null)
                    {{-- <li> <a  href="{{route('products.create')}}">ADD PRODUCT</a></li> --}}
                    {{-- <li> <a class="navbar-brand" href="/myproduct">MY PRODUCT</a></li>  --}} 
                    <li> <a  href="{{ url('/products') }}">Clothes
                    </a></li>
                    <li><a href="{{ url('/contactus') }}">Contact Us</a></li>
                    @endif  
                
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                   
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
    
                        </ul> 
                    </ul> 
                </nav>
                   
                    
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif 
                                
                        
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div> 
                                    
                                </li>
                        </ul> 
                    
                            @endguest
                       
                    </div>
               
                
                </div>
            
        </div>
    </header>
        

        <main class="py-4 text-center">
            <div class="well">
            @include('inc.messages')
            @yield('content')
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" ></script>

</body>
</html>
