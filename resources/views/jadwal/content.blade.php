@extends('../layout/landingpage')
@section('title', 'Jadwal')
@section('content')

<div id="jadwal">
    <div class="container fullscreen pt-5 pb-5">
        <div class="row">
            <h2><a class="fw-med text-black" href="{{ route('jadwal') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Jadwal Budaya Batak</h2><hr>
            <div class="modul col-8">
                <div class="row">
                    <img src="{{ asset('assets/img/event3.jpg') }}" alt="">
                </div>
                <div class="row pt-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nisi illo consequuntur illum, sunt quia? Incidunt quo esse distinctio dicta fugit tempora deleniti itaque soluta, placeat blanditiis eveniet ducimus fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nisi illo consequuntur illum, sunt quia? Incidunt quo esse distinctio dicta fugit tempora deleniti itaque soluta, placeat blanditiis eveniet ducimus fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nisi illo consequuntur illum, sunt quia? Incidunt quo esse distinctio dicta fugit tempora deleniti itaque soluta, placeat blanditiis eveniet ducimus fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nisi illo consequuntur illum, sunt quia? Incidunt quo esse distinctio dicta fugit tempora deleniti itaque soluta, placeat blanditiis eveniet ducimus fuga.</p>
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
                            <h2>Jadwal tentang Batak</h2>
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
                            <h2>Jadwal tentang Batak</h2>
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
                            <h2>Jadwal tentang Batak</h2>
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