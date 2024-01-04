@extends('../layout/landingpage')
@section('title', 'Modul')
@section('content')

<div id="modul">
    <div class="container fullscreen pt-5 pb-5">
        <div class="row">
            <div class="modul col-12">
                <h3 class="mb-4"><a href="{{ route('landingpage') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Modul Budaya<hr></h3>
                <!--- batas -->
                @foreach ($data as $d)
                <div class="row mb-5">
                    <div class="col-4">
                        <img src="{{ asset('assets/img/event1.jpg') }}" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h2>{{ $d->nama_modul}}</h2>
                            <p>{{ $d->deskripsi }}</p>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('isi_modul', $d->id) }}">
                                <button class="btn btn-danger" type="button">Lihat Selengkapnya</button></a>    
                        </div>
                    </div>
                </div>
                @endforeach
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