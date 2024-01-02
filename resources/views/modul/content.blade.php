@extends('../layout/landingpage')
@section('title', 'Modul')
@section('content')

<div id="kuis">
    <div class="container fullscreen pt-5 pb-5">
        <div class="row">
            <h2><a class="fw-med text-black" href="{{ route('modul') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Modul Budaya Batak</h2><hr>
            <div class="modul col-8">
                <div class="row">
                    <img src="{{ asset('assets/img/event3.jpg') }}" alt="">
                </div>
                <div class="row pt-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nisi illo consequuntur illum, sunt quia? Incidunt quo esse distinctio dicta fugit tempora deleniti itaque soluta, placeat blanditiis eveniet ducimus fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nisi illo consequuntur illum, sunt quia? Incidunt quo esse distinctio dicta fugit tempora deleniti itaque soluta, placeat blanditiis eveniet ducimus fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nisi illo consequuntur illum, sunt quia? Incidunt quo esse distinctio dicta fugit tempora deleniti itaque soluta, placeat blanditiis eveniet ducimus fuga.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nisi illo consequuntur illum, sunt quia? Incidunt quo esse distinctio dicta fugit tempora deleniti itaque soluta, placeat blanditiis eveniet ducimus fuga.</p>
                </div>

                <!-- komentar -->
                <hr>
                <h5 class="pb-2">Tinggalkan Komentar.</h5>
                <form class="komentar pb-5">
                    <div class="row">
                        <div class="col-1">
                            <img src="{{ asset('assets/users/1.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </div>
                      <div class="col-10">
                        <input type="text" class="form-control" placeholder="Ketik Disini" name="email">
                      </div>
                      <div class="col-1">
                        <input type="submit" class="btn btn-primary" value="Kirim">
                      </div>
                    </div>
                </form>

                <h5>Komentar Pengguna :</h5>
                <div class="komentar mt-3">
                    <div class="row mt-2">
                        <div class="col-1">
                            <img src="{{ asset('assets/users/1.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div class="col-11">
                            <b>Saipul</b>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, commodi iure! Omnis, quibusdam nihil temporibus deserunt odio a ipsa excepturi ut consectetur blanditiis illum sunt explicabo necessitatibus eveniet ex consequatur.</p>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-1">
                            <img src="{{ asset('assets/users/2.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div class="col-11">
                            <b>Sidak</b>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, commodi iure! Omnis, quibusdam nihil temporibus deserunt odio a ipsa excepturi ut consectetur blanditiis illum sunt explicabo necessitatibus eveniet ex consequatur.</p>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-1">
                            <img src="{{ asset('assets/users/3.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div class="col-11">
                            <b>Somat</b>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, commodi iure! Omnis, quibusdam nihil temporibus deserunt odio a ipsa excepturi ut consectetur blanditiis illum sunt explicabo necessitatibus eveniet ex consequatur.</p>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-1">
                            <img src="{{ asset('assets/users/4.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div class="col-11">
                            <b>Soheb</b>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, commodi iure! Omnis, quibusdam nihil temporibus deserunt odio a ipsa excepturi ut consectetur blanditiis illum sunt explicabo necessitatibus eveniet ex consequatur.</p>
                        </div>
                    </div>
                </div>
                <!-- komentar -->
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