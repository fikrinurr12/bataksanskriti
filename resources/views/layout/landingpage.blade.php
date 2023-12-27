<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- css & js -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <!-- css & js -->

    <title>Batak Sanskriti - @yield('title')</title>
</head>
<body>

<!-- navbar start -->
    <nav class="navbar navbar-expand-lg sticky-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('landingpage') }}"><img class="rounded-pill" src="{{ asset('assets/logo/logo.png') }}" width="35em" alt=""> 
                <span></span>BatakSanskriti</a>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto gap-4">
                <li class="nav-item">
                  <a class="nav-link {{ request()->is('/') ? 'active fw-bold' : ''}}" aria-current="page" href="{{ route('landingpage') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ request()->is('/modul/*') ? 'active fw-bold' : ''}}" href="#">Modul</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ request()->is('/kuis/*') ? 'active fw-bold' : ''}}" href="#">Kuis</a>
                </li>
                <li class="nav-item login">
                  <a class="btn btn-danger round" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="rounded-pill border border-2 border-danger" src="{{ asset('assets/users/1.jpg') }}" width="35em" alt=""> 
                  </a>
                  <ul class="dropdown-menu nav-item login">
                    <li><a class="dropdown-item profil" href="#">Profil</a></li>
                    <li><a class="dropdown-item profil" href="#">Leaderboard</a></li><hr>
                    <li><a class="dropdown-item profil" href="#">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
        </div>
    </nav>
<!-- navbar end -->

<!-- main -->
    @yield('content')
<!-- main -->


<!-- js -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- js -->
</body>
</html>