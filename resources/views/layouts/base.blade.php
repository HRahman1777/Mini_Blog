<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">



    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <script src="{{ asset('asset/js/jq.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.js') }}"></script>
    <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>


    <title>@yield('title', 'mini blog')</title>
    @livewireStyles

</head>

<body>

    <div class="container">
        <!-- nav bar section START -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3 rounded">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">mini blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('all.posts') }}">Posts</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>

                    @if (Route::has('login'))
                    <ul class="navbar-nav">
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                @if (Auth::user()->userType == 'ADM')
                                <li>
                                    <a class="dropdown-item" href="{{ route('adm.dashboard') }}">Admin Desk</a>
                                </li>
                                @endif
                                <li>
                                    <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                        @endif
                        @endauth
                    </ul>
                    @endif
                </div>
            </div>
        </nav>
        <!-- nav bar section END -->

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>


        <footer class="container">

            <div class="text-center">
                <div class=" row " style=" padding: 3rem;">
                    <div class="col">
                        <a href="#">About</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed architecto ipsam assumenda incidunt
                            natus hic! Quibusdam quam doloremque temporibus libero eaque sunt officia dolorem quia. Quo
                            nostrum repellendus consectetur esse.</p>
                    </div>
                    <div class="col">
                        <a href="#">Policy</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed architecto ipsam assumenda incidunt
                            natus hic! Quibusdam quam doloremque temporibus libero eaque sunt officia dolorem quia. Quo
                            nostrum repellendus consectetur esse.</p>
                    </div>
                    <div class="col">
                        <a href="#">Social Media</a>
                    </div>
                </div>
                <p class="btn-dark rounded"><i>HasiburRahman2021</i></p>
            </div>

        </footer>

    </div>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(Session::has('success_message'))
    <p id="ses" hidden>
        {{Session::get('success_message')}}
    </p>
    <script>
        msg = $('#ses').text();
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: msg,
            showConfirmButton: false,
            timer: 2000
        })
    </script>
    @endif
    @if(Session::has('wrong_message'))
    <p id="eses" hidden>
        {{Session::get('wrong_message')}}
    </p>
    <script>
        emsg = $('#eses').text();
        Swal.fire({
            icon: 'error',
            title: 'Wrong Choice',
            text: emsg,
        })
    </script>
    @endif

    @livewireScripts

</body>

</html>