@extends('../layout/landingpage')
@section('title', 'Modul')
@section('content')

<div id="modul">
    <div class="container fullscreen pt-5 pb-5">
        <div class="row">
            <h4 class="mb-4"><a class="fw-med text-black" href="{{ route('modul') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a><hr></h4>
            <div class="modul col-8">
                <div class="row">
                    <h2>Modul Tentang Batak</h2>
                    <img src="" alt="">
                </div>
                <div class="row">
                    komentar
                </div>
            </div>
            <div class="modul col-4">
                
                <!--- batas -->
                <div class="row mb-5">
                    <div class="col-4">
                        <img src="{{ asset('assets/img/event1.jpg') }}" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h2>Modul tentang Batak</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ex veniam alias odio ipsum reprehenderit labore architecto inventore magni, natus voluptatem rerum. Placeat quibusdam non exercitationem amet rem eius repellat!</p>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="#">
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
                            <h2>Modul tentang Batak</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ex veniam alias odio ipsum reprehenderit labore architecto inventore magni, natus voluptatem rerum. Placeat quibusdam non exercitationem amet rem eius repellat!</p>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="#">
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
                            <h2>Modul tentang Batak</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ex veniam alias odio ipsum reprehenderit labore architecto inventore magni, natus voluptatem rerum. Placeat quibusdam non exercitationem amet rem eius repellat!</p>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="#">
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
                            <h2>Modul tentang Batak</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ex veniam alias odio ipsum reprehenderit labore architecto inventore magni, natus voluptatem rerum. Placeat quibusdam non exercitationem amet rem eius repellat!</p>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="#">
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
                            <h2>Modul tentang Batak</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ex veniam alias odio ipsum reprehenderit labore architecto inventore magni, natus voluptatem rerum. Placeat quibusdam non exercitationem amet rem eius repellat!</p>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="#">
                                <button class="btn btn-danger" type="button">Lihat Selengkapnya</button></a>    
                        </div>
                    </div>
                </div>               
                <!--- batas -->
            </div>
        </div>
    </div>
</div>


@endsection