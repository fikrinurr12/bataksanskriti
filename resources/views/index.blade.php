@extends('layout/landingpage')
@section('title','Landing Page')
@section('content')

<!-- main start -->
    <div class="container d-flex align-items-center" style="height: 90vh;">
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
            <img src="{{ asset('assets/logo/logo.png') }}" class="img-logo ms-auto" alt="">
          </div>
        </div>
    </div>
<!-- main end -->

@endsection