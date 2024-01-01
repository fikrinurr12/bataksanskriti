@extends('../layout/landingpage')
@section('title', 'Modul')
@section('content')

<div id="modul">
    <div class="container fullscreen pt-5 pb-5">
        <div class="row">
            <div class="modul col-12">
                <h3 class="mb-4"><a href="{{ route('landingpage') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Jadwal Budaya<hr></h3>
                <!--- batas -->
                <div class="row mb-5">
                    <div class="col-4">
                        <img src="{{ asset('assets/img/event1.jpg') }}" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h2>Jadwal tentang Batak</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ex veniam alias odio ipsum reprehenderit labore architecto inventore magni, natus voluptatem rerum. Placeat quibusdam non exercitationem amet rem eius repellat!</p>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('isi_jadwal') }}">
                                <button class="btn btn-danger" type="button">Lihat Selengkapnya</button></a>    
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-4">
                        <img src="{{ asset('assets/img/event3.jpg') }}" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h2>Jadwal tentang Batak</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ex veniam alias odio ipsum reprehenderit labore architecto inventore magni, natus voluptatem rerum. Placeat quibusdam non exercitationem amet rem eius repellat!</p>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('isi_jadwal') }}">
                                <button class="btn btn-danger" type="button">Lihat Selengkapnya</button></a>    
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-4">
                        <img src="{{ asset('assets/img/event2.png') }}" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h2>Jadwal tentang Batak</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ex veniam alias odio ipsum reprehenderit labore architecto inventore magni, natus voluptatem rerum. Placeat quibusdam non exercitationem amet rem eius repellat!</p>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('isi_jadwal') }}">
                                <button class="btn btn-danger" type="button">Lihat Selengkapnya</button></a>    
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-4">
                        <img src="{{ asset('assets/img/event1.jpg') }}" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h2>Jadwal tentang Batak</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ex veniam alias odio ipsum reprehenderit labore architecto inventore magni, natus voluptatem rerum. Placeat quibusdam non exercitationem amet rem eius repellat!</p>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('isi_jadwal') }}">
                                <button class="btn btn-danger" type="button">Lihat Selengkapnya</button></a>    
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-4">
                        <img src="{{ asset('assets/img/event3.jpg') }}" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h2>Jadwal tentang Batak</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ex veniam alias odio ipsum reprehenderit labore architecto inventore magni, natus voluptatem rerum. Placeat quibusdam non exercitationem amet rem eius repellat!</p>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('isi_jadwal') }}">
                                <button class="btn btn-danger" type="button">Lihat Selengkapnya</button></a>    
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