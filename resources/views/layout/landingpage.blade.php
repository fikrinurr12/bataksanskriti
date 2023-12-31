<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- css & js -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <!-- css & js -->

    <title>Batak Sanskriti - @yield('title')</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="10">

<!-- navbar start -->
<nav class="navbar navbar-expand-lg sticky-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('landingpage') }}">
            <img class="rounded-pill" src="{{ asset('assets/logo/logo.png') }}" width="35em" alt="">
            <span>BatakSanskriti</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-4">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('landingpage') }}#main">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('landingpage') }}#about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('landingpage') }}#jadwal">Event</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan
                    </a>
                    <ul id="darkDropdown" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item profil {{ request()->is('/modul-view/*') ? 'active fw-bold' : ''}}" href="{{ route('modul') }}">Modul</a></li>
                        <li><a class="dropdown-item profil {{ request()->is('/kuis-view/*') ? 'active fw-bold' : ''}}" href="{{ route('kuis') }}">Kuis</a></li>
                    </ul>
                </li>
                @guest
                <li class="nav-item login">
                    <a class="btn btn-danger round" href="{{ route('login') }}">Login</a>
                </li>
                @endguest
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="rounded-pill border border-2 border-danger profil" src="{{ asset('assets/users/1.jpg') }}" width="35em" alt=""> 
                    </a>
                    <ul class="dropdown-menu nav-item login">
                        @if(auth()->user()->role == 'admin')
                            <li><a class="dropdown-item profil" href="{{ route('dashboard') }}">Dashboard</a></li>
                        @endif
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item" href="/logout">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>    
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- navbar end -->

<!-- main -->
    @yield('content')
<!-- main -->


<!-- footer -->
<div id="footer" class="bg-dark text-light pt-5">
    <footer class="container">
        <div class="row  pb-2">
          <!-- About Column -->
          <div class="col-md-6">
            <h5>About</h5>
            <p>Eksplorasi kekayaan dan keindahan Budaya Batak! Sumber informasi yang lengkap, kami membawa Anda dalam perjalanan mendalam untuk menggali keunikannya. Dari sejarah yang gemilang hingga tradisi yang kaya, temukan landasan yang mendalam untuk meresapi pesona kebudayaan Batak. Bergabunglah dengan kami dalam merayakan dan melestarikan kearifan lokal yang menjadi pewaris budaya yang penuh makna.</p>
          </div>
      
          <!-- Contact Column -->
          <div class="col-md-6">
            <h5>Contact</h5>
            <p>Email: admin@gmail.com</p>
            <p>Phone: +62-888-222-999</p>
            <!-- Add more contact information as needed -->
          </div>
        </div>
      </footer>
</div>
<!-- footer -->

<!-- cr -->
<footer class="more-dark text-light">
    <div class="container">
        <div class="row pt-3 pb-3">
            <b class="text-center">Copyright @2023 By Kelompok 3</b>
        </div>
    </div>
</footer>
<!-- cr -->


<!-- js -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- js -->
</body>
</html>