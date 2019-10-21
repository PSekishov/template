<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('myscripts/normalize.css') }}">
    <link rel="stylesheet" href="{{asset('myscripts/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('myscripts/fontawesomecss/all.min.css') }}">
    <link rel="stylesheet" href="{{asset('myscripts/wow/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('myscripts/base.css') }}">
</head>
<body>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="{{ url('/')}}">Template</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          
                            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            
                              <ul class="navbar-nav mr-auto">
                                <li class="nav-item {{request()->is('/') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{url('/')}}">Home</a>
                                </li>
                                <li class="nav-item {{request()->is('about') ? 'active' : '' }} ">
                                <a class="nav-link" href="{{url('/about')}}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>                              
                              </ul>
                                
                              @guest  
                                <ul class="navbar-nav  float-sm-right">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                    </li>
                                      <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                </ul>

                                @else 

                                <ul class="navbar-nav  float-sm-right">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class='nav-link' href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </li>
                                    </ul>     
                                @endguest
                              
                            </div>
                          </nav>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                    @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('myscripts/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('myscripts/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('myscripts/fontawesome/js/all.min.js') }}"></script>
    <script src="{{ asset('myscripts/wow/wow.min.js') }}"></script>
    <script src="{{ asset('myscripts/myscript.js') }}"></script>
</body>
</html>
