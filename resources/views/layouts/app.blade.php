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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/hover-min.css') }}" rel="stylesheet" type="text/css">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"> --}}

    <style type="text/css">
        .color-white {
            color: #fff !important;
        }
        .simul-navbar-header {
            border-bottom: 5px solid #ECB200;
            background-color: #00254E;
        }
        #loader-page {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
        }
        .loader {
            border: 12px solid #f3f3f3; /* Light grey */
            border-top: 12px solid #00254E; /* Blue */
            border-radius: 50%;
            animation: spin 2s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .display-flex {
            display: flex;
        }
        .d-flex-1 {
            flex: 1;
        }
        .d-flex-2 {
            flex: 2;
        }
        .btn-title {
            margin-top: 14px;
        }
        .hvr-icon-wobble-horizontal:before {
            content: '\f04e';
        }
        .hvr-icon-drop:before {
            content: '\f0c9';
        }

        .modal-size {
            width: 700px
        }
        .modal-text {
            font-size: 18px;
        }
        .modal-text > p {
            white-space: nowrap;
            overflow: hidden;
            width: 670px;
            animation: type 4s steps(60, end);
        }
        @keyframes type{
            from { width: 0; }
        }
        @media screen and (max-width: 768px) {
            .display-flex {
                flex-direction: column;
            }
        }
    </style>
    @stack('pageCss')

    <!-- Script -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top simul-navbar-header">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    {{-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> --}}

                    <!-- Branding Image -->
                    <a class="navbar-brand color-white" href="{{ url('/') }}">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                        Sistem Simulasi Akreditasi Online
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <!-- @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest -->
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    {{-- MODAL --}}
    <div id="warningModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-size">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body modal-text">
            <p id="content-text"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" id="backTo">OK</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/popper.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    @stack('pageJs')
</body>
</html>
