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
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto explicabo distinctio sunt repellat expedita repudiandae porro accusamus accusantium perspiciatis! Necessitatibus debitis quos omnis tempore expedita natus consequuntur porro similique deserunt.</p>
          <a href="{{ route('login') }}"><button class="btn btn-danger roundpage px-4 py-2 mt-3" id="mainNav">Masuk Sekarang</button></a>
        </div>
      </div>
      <div class="col-6 d-flex align-items-center">
        <img src="{{ asset('assets/img/main-image.png') }}" class="img-logo m-auto" alt="">
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
            Dapatkan Informasi Tentang Budaya Batak Secara Lenkap.
          </h1>
          <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto explicabo distinctio sunt repellat expedita repudiandae porro accusamus accusantium perspiciatis! Necessitatibus debitis quos omnis tempore expedita natus consequuntur porro similique deserunt.</p>
          <a href="{{ route('login') }}"><button class="btn btn-light roundpage px-4 py-2 mt-3" id="mainNav">Lihat Modul</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- about end -->

<!-- about start -->
<div id="event">
  <div class="container d-flex align-items-center full-height">
    <div class="row">
      <div class="col-6 d-flex align-items-center">
        <img src="{{ asset('assets/img/main-image.png') }}" class="img-logo m-auto" alt="">
      </div>
      <div class="col-6 d-flex align-items-center">
        <div>
          <h1 class="fs-1 fw-bold">
            Dapatkan Informasi Tentang Budaya Batak Secara Lenkap.
          </h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto explicabo distinctio sunt repellat expedita repudiandae porro accusamus accusantium perspiciatis! Necessitatibus debitis quos omnis tempore expedita natus consequuntur porro similique deserunt.</p>
          <a href="{{ route('login') }}"><button class="btn btn-light roundpage px-4 py-2 mt-3" id="mainNav">Lihat Modul</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- about end -->

<!-- testimoni start -->
<div id="testimoni">
  <div class="container d-flex align-items-center full-height">
    <div class="row">
      <div class="col-6 d-flex align-items-center">
        <img src="{{ asset('assets/logo/logo.png') }}" class="img-logo m-auto" alt="">
      </div>
      <div class="col-6 d-flex align-items-center">
        <div>
          <h1 class="fs-1 fw-bold">
            Kembangkan Budaya Batak Melalui Digitalisasi Modern Untuk Generasi Penerus Budaya.
          </h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto explicabo distinctio sunt repellat expedita repudiandae porro accusamus accusantium perspiciatis! Necessitatibus debitis quos omnis tempore expedita natus consequuntur porro similique deserunt.</p>
          <a href="{{ route('login') }}"><button class="btn btn-danger roundpage px-4 py-2 mt-3" id="mainNav">Masuk Sekarang</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- testimoni end -->

@endsection