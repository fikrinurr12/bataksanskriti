@extends('../layout/landingpage')
@section('title', 'Modul')
@section('content')

<div id="kuis">
    <div class="container fullscreen pt-5 pb-5">
        <div class="row">
            <h2><a class="fw-med text-black" href="{{ route('modul') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> {{ $data->nama_modul }}</h2><hr>
            <div class="modul-content col-8">
                <div class="row">
                    <img src="{{ asset('storage') }}/{{ $data->gambar }}" alt="">
                </div>
                <div class="row pt-3">
                    <p>{{ $data->deskripsi }}</p>
                </div>
                <div class="row pt-3">
                    <a href="{{ route('isi_kuis',$data->id) }}"><button class="btn btn-danger">Kerjakan Kuis</button></a>
                </div>

                <!-- komentar -->
                <hr>
                @auth
                <h5 class="pb-2">Tinggalkan Komentar.</h5>
                <form class="komentar pb-5" action="{{ route('komentar') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-1">
                            <input type="text" name="modul_id" hidden value="{{ $data->id }}">
                            <img src="{{ asset('assets/users/1.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </div>
                      <div class="col-10">
                        <input type="text" class="form-control" placeholder="Ketik Disini" name="komentar">
                      </div>
                      <div class="col-1">
                        <input type="submit" class="btn btn-primary" value="Kirim">
                      </div>
                    </div>
                </form>
                @endauth
                @guest
                    <h5 class="pb-5">Login Terlebih Dahulu untuk Berkomentar!</h5>
                @endguest

                <h5>Komentar Pengguna :</h5>
                <div class="komentar mt-3">
                    @foreach($komentar as $km)
                    <div class="row mt-2">
                        <div class="col-1">
                            <img src="{{ asset('assets/users/1.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div class="col-11">
                            <b>{{ $km->user->nama_lengkap }}</b>
                            <p>{{ $km->komentar }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- komentar -->
            </div>
            <div class="modul-sidebar col-4">
                
                <!--- batas -->
                @foreach($sidebar as $s)
                <div class="row mb-5">
                    <div class="col-4">
                        <img src="{{ asset('storage') }}/{{ $s->gambar }}" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h2>{{ $s->nama_modul }}</h2>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('isi_modul',$s->id) }}">
                                <button class="btn btn-danger" type="button">Lihat Selengkapnya</button></a>    
                        </div>
                    </div>
                </div> 
                @endforeach        
                <!--- batas -->
            </div>
        </div>
    </div>
</div>


@endsection