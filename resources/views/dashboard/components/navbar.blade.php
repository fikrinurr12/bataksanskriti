<nav class="navbar fixed-top bg-body-tertiary px-2 py-3">
    <div class="container-fluid d-flex-between">
        <a class="navbar-brand d-flex gap-2" href="{{ route('landingpage') }}">
            <img class="rounded-pill" src="{{ asset('assets/logo/logo.png') }}" width="35em" alt="">
            <span class="title-responsive d-flex align-items-center">BatakSanskriti</span>
        </a>
        <ul class="d-flex gap-3 py-2 mb-0">
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="rounded-pill border border-2 border-danger profil" src="{{ asset('assets/users/1.jpg') }}" width="35em" alt=""> 
            </a>
            <button class="navbar-toggler navbar-responsive" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </ul>   
    </div>
    <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
        <div class="bg-light p-4 d-flex flex-row">
            @if(auth()->user()->role == 'admin')
                <div class="p-2">
                    <a href="/dashboard" class="text-dark">Dashboard</a>
                </div>            
                <div class="p-2">
                    <a href="/modul" class="text-dark">Modul</a>
                </div>            
                <div class="p-2">
                    <a href="/kuis" class="text-dark">Kuis</a>
                </div>            
                <div class="p-2">
                    <a href="/event" class="text-dark">Event</a>
                </div>
            @else
                <div class="p-2">
                    <a href="/dashboard" class="text-dark">Dashboard</a>
                </div>            
                <div class="p-2">
                    <a href="/modul" class="text-dark">Modul</a>
                </div>            
                <div class="p-2">
                    <a href="/kuis" class="text-dark">Kuis</a>
                </div>
            @endif        
        </div>
    </div>
</nav>