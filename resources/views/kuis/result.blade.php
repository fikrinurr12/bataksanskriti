@extends('../layout/landingpage')
@section('title', 'Kuis')
@section('content')

<div id="modul">
    <div class="container fullscreen pt-5 pb-5">
        <div class="row">
            <div class="modul col-12">
                <h3 class="mb-4"><a href="{{ route('landingpage') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Kuis Budaya<hr></h3>
                <!--- batas -->

                <h1 class="text-center">Skor Anda : <b>100/100</b></h1>
                <h3 class="mt-3">Kerjakan Kuis Lainnya :</h3>
                
                <div class="row mb-5 row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                        <div class="card col pt-3 h-100">
                            <div class="container-fluid">
                                <img src="{{ asset('assets/img/event3.jpg') }}" class="card-img-top cover-kuis" alt="...">
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Kuis 1</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="{{ route('isi_kuis') }}" class="btn btn-danger">Kerjakan</a>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card col pt-3 h-100">
                            <div class="container-fluid">
                                <img src="{{ asset('assets/img/event1.jpg') }}" class="card-img-top cover-kuis" alt="...">
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Kuis 2</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="{{ route('isi_kuis') }}" class="btn btn-danger">Kerjakan</a>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card col pt-3 h-100">
                            <div class="container-fluid">
                                <img src="{{ asset('assets/img/event2.png') }}" class="card-img-top cover-kuis" alt="...">
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Kuis 3</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="{{ route('isi_kuis') }}" class="btn btn-danger">Kerjakan</a>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card col pt-3 h-100">
                            <div class="container-fluid">
                                <img src="{{ asset('assets/img/event3.jpg') }}" class="card-img-top cover-kuis" alt="...">
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Kuis 4</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="{{ route('isi_kuis') }}" class="btn btn-danger">Kerjakan</a>
                            </div>
                          </div>
                    </div>
                </div>

                <!--- batas -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>


@endsection