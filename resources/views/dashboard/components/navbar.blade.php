<nav class="navbar sticky-top bg-body-tertiary px-2 py-3">
    <div class="container-fluid d-flex-between">
        <a class="navbar-brand d-flex gap-2" href="{{ route('landingpage') }}">
            <img class="rounded-pill" src="{{ asset('assets/logo/logo.png') }}" width="35em" alt="">
            <span class="title-responsive d-flex align-items-center">BatakSanskriti</span>
        </a>
        <ul class="d-flex gap-3 py-2 mb-0">
            <div class="dropdown">
                <img src="{{ asset('assets/users/1.jpg') }}" width="35em" alt="" class="rounded-pill border border-2 border-danger profil dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">              
                <ul class="dropdown-menu transform">
                  <li>
                    <a href="/profile" class="dropdown-item">Profile</a>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="dropdown-item" href="/logout">Logout</button>
                    </form>
                </li>
                </ul>
              </div>           
            <button class="navbar-toggler navbar-responsive" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </ul>   
    </div>
    <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
        <div class="bg-light p-4 d-flex flex-row">
                <div class="p-2">
                    <a href="/dashboard" class="{{Request::is('dashboard') ? 'text-main' : 'text-dark'}}">Dashboard</a>
                </div>            
                <div class="p-2">
                    <a href="/modul" class="{{Request::is('modul*') ? 'text-main' : 'text-dark'}}">Modul</a>
                </div>            
                <div class="p-2">
                    <a href="/kuis" class="{{Request::is('kuis*') ? 'text-main' : 'text-dark'}}">Kuis</a>
                </div>            
                <div class="p-2">
                    <a href="/event" class="{{Request::is('event*') ? 'text-main' : 'text-dark'}}">Event</a>
                </div>     
        </div>
    </div>
</nav>