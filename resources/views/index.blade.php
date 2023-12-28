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

<!-- event start -->
<div id="event">
  <div class="container">
    <div class="row event text-center mt-auto align-items-end">
      <div class="col">
        <h1>Event Budaya</h1>
      </div>
    </div>
    <div id="cardSlider" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner mt-5">
        <div class="carousel-item active">
          <div class="card mini-card mx-auto">
            <!-- Mini card content for the first carousel item -->
            <img src="{{ asset('assets/img/event1.jpg') }}" class="card-img-top" alt="Image 1">
            <div class="card-body">
              <h5 class="card-title">Card 1</h5>
              <p class="card-text">Some text for Card 1.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card mini-card mx-auto">
            <!-- Mini card content for the second carousel item -->
            <img src="{{ asset('assets/img/event2.png') }}" class="card-img-top" alt="Image 2">
            <div class="card-body">
              <h5 class="card-title">Card 2</h5>
              <p class="card-text">Some text for Card 2.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card mini-card mx-auto">
            <!-- Mini card content for the third carousel item -->
            <img src="{{ asset('assets/img/event3.jpg') }}" class="card-img-top" alt="Image 3">
            <div class="card-body">
              <h5 class="card-title">Card 3</h5>
              <p class="card-text">Some text for Card 3.</p>
            </div>
          </div>
        </div>
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
</div>
<!-- event end -->

<!-- testimoni start -->
<div id="testimoni" class="d-flex align-items-center justify-content-center">
  <div class="container">
    <h1 class="text-center text-white">Our's User</h1>
    <p class="text-center text-white">Apa Kata Mereka?</p>
    <div class="row row-cols-1 row-cols-md-3 g-4 text-center m-auto">

      <!-- Card 1 -->
      <div class="col">
        <div class="card p-5">
          <img src="{{ asset('assets/users/1.jpg') }}" class="card-img-top rounded-circle comment m-auto" alt="Profile Image 1">
          <div class="card-body">
            <p class="card-text">"User Comment 1 goes here."<i class="bi bi-house-door"></i></p>
          </div>
        </div>
      </div>
  
      <!-- Card 2 -->
      <div class="col">
        <div class="card p-5">
          <img src="{{ asset('assets/users/2.jpg') }}" class="card-img-top rounded-circle comment m-auto" alt="Profile Image 2">
          <div class="card-body">
            <p class="card-text">"User Comment 2 goes here."</p>
          </div>
        </div>
      </div>
  
      <!-- Card 3 -->
      <div class="col">
        <div class="card p-5">
          <img src="{{ asset('assets/users/3.jpg') }}" class="card-img-top rounded-circle comment m-auto" alt="Profile Image 3">
          <div class="card-body">
            <p class="card-text">"User Comment 3 goes here."</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- testimoni end -->

@endsection