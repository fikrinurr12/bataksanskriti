@extends('../layout/landingpage')
@section('title', 'Kuis')
@section('content')

<div id="kuis">
    <div class="container fullscreen pt-5 pb-5">
        <div class="row">
            <div class="modul col-12">
                <h3 class="mb-4"><a href="{{ route('landingpage') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Kuis Budaya<hr></h3>
                <!--- batas -->
                @auth
                <!-- <h1 class="text-center">Skor Anda : <b>{{$hasil}}/100</b></h1> -->
                <h3 class="mt-3">Kerjakan Kuis Lainnya :</h3>
                
                <div class="row mb-5 row-cols-1 row-cols-md-4 g-4">
                  @foreach($moduls as $md)
                  <div class="col">
                      <div class="card col pt-3 h-100 kuis">
                          <div class="container-fluid">
                              <img src="{{ asset('storage') }}/{{ $md->gambar }}" class="card-img-top cover-kuis" alt="...">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Kuis {{ $md->nama_modul }}</h5>
                            <a href="{{ route('isi_kuis', $md->id) }}" class="btn btn-danger">Kerjakan</a>
                          </div>
                        </div>
                  </div>
                  @endforeach
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
                @endauth

                @guest
                <div class="row mt-5 mb-5">
                  <h1 class="text-center">Login Terlebih Dahulu!</h1>
                </div>
                @endguest
            </div>
        </div>
    </div>
</div>


@endsection