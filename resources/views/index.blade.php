@extends('layout/landingpage')
@section('title','Landing Page')
@section('content')

<!-- main start -->
<div id="main">
  <div class="container d-flex align-items-center full-height">
    <div class="row">
      <div class="col-6 d-flex align-items-center">
        <div>
          <h1 class="fs-1 fw-bold">
            Kembangkan Budaya Batak Melalui Digitalisasi Modern Untuk Generasi Penerus Budaya.
          </h1>
          <p>Merawat Kearifan Budaya Batak Melalui Inovasi Digital. Satukan Generasi Penerus dalam Perjalanan Digitalisasi Modern Menuju Warisan Budaya yang Abadi.</p>
          @auth
            <a href="#about"><button class="btn btn-danger roundpage px-4 py-2 mt-3" id="mainNav">Jelajahi Sekarang</button></a>
          @endauth
          @guest
            <a href="{{ route('login') }}"><button class="btn btn-danger roundpage px-4 py-2 mt-3" id="mainNav">Masuk Sekarang</button></a>
          @endguest
        </div>
      </div>
      <div class="col-6 d-flex align-items-center">
        <img src="{{ asset('assets/img/orangbatak.png') }}" class="img-logo m-auto" alt="">
      </div>
    </div>
</div>
</div>
<!-- main end -->

<!-- about start -->
<div id="about">
  <div class="container d-flex align-items-center full-height">
    <div class="row">
      <div class="col-6 d-flex align-items-center">
        <img src="{{ asset('assets/img/main-image.png') }}" class="img-logo m-auto" alt="">
      </div>
      <div class="col-6 d-flex align-items-center">
        <div>
          <h1 class="fs-1 fw-bold text-white">
            Dapatkan Informasi Tentang Budaya Batak Secara Lengkap.
          </h1>
          <p class="text-white">Temukan Kebesaran Sejarah, Kekayaan Tradisi, dan Kedalaman Kearifan Lokal yang Membentuk Identitas yang Penuh Warna. Mari Bersama-sama Menggali Informasi yang Lenkap dan Mendalam tentang Warisan Budaya Batak.</p>
          <a href="{{ route('modul') }}"><button class="btn btn-light roundpage px-4 py-2 mt-3" id="mainNav">Lihat Modul</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- about end -->

<!-- event start -->
<div id="jadwal" class="pb-5">
  <div class="container">
    <div class="row event text-center mt-auto align-items-end">
      <div class="col">
        <h1>Event Budaya</h1>
      </div>
    </div>
    <div class="row mb-5">
      <div id="cardSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner mt-5">

          @foreach ($data as $index => $d)
          <a href="{{ route('isi_jadwal', $d->id) }}">
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
              <div class="card mini-card mx-auto">
                <!-- Mini card content for the first carousel item -->
                <img src="{{ asset('storage') }}/{{ $d->gambar }}" class="card-img-top" alt="Image {{ $index+1 }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $d->lokasi }}</h5>
                  <p class="card-text">By : {{ $d->user->nama_lengkap }}</p>
                </div>
              </div>
            </div>
          </a>
          @endforeach
          <!-- Add more carousel items with sets of mini cards as needed -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#cardSlider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#cardSlider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="row text-center mt-auto align-items-end mt-5">
      <a href="{{ route('jadwal') }}"><button class="btn btn-danger roundpage">Lihat Lebih Banyak</button></a>
    </div>
  </div>
</div>
<!-- event end -->

@endsection