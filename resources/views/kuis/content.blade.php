@extends('../layout/landingpage')
@section('title', 'Kuis')
@section('content')

<div id="kuis">
    <div class="container fullscreen pt-5 pb-5">
        <div class="row">
            <h2><a class="fw-med text-black" href="{{ route('kuis') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Kuis {{ $modul->nama_modul }}</h2><hr>
                @auth
                @if (count($kuis) > 0)
                <!--- batas -->
                    <form action="{{ route('hasil_kuis') }}" method="post">
                        @csrf
                        @php
                            $no = 1; 
                        @endphp
                        @foreach($kuis as $index => $k)
                        <div class="row kuis mb-5">
                            <p>{{ $index+1 }}. {{ $k->soal }}</p>
                            <div class="input-group mb-2">
                                <div class="input-group-text form-control">
                                    <input id="radio1" class="form-check-input mt-0" type="radio" value="a" name="answer1" aria-label="Radio button for following text input">
                                    <label for="radio1" class="ms-2"> {{ $k->opsi_a }}</label>
                                </div>
                            </div> 
                            <div class="input-group mb-2">
                                <div class="input-group-text form-control">
                                    <input id="radio2" class="form-check-input mt-0" type="radio" value="b" name="answer1" aria-label="Radio button for following text input">
                                    <label for="radio2" class="ms-2"> {{ $k->opsi_b }}</label>
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-text form-control">
                                    <input id="radio3" class="form-check-input mt-0" type="radio" value="c" name="answer1" aria-label="Radio button for following text input">
                                    <label for="radio3" class="ms-2"> {{ $k->opsi_c }}</label>
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-text form-control">
                                    <input id="radio4" class="form-check-input mt-0" type="radio" value="d" name="answer1" aria-label="Radio button for following text input">
                                    <label for="radio4" class="ms-2"> {{ $k->opsi_d }}</label>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <button type="submit" class="btn btn-danger">Submit Jawaban</button>
                    </form>
                @else
            <!--- batas -->
                <h2>Kuis Belum Dibuat!</h2>
                
                @endif
                @endauth
                
                
                @guest
                <div class="row mt-5 mb-5">
                  <h1 class="text-center">Login Terlebih Dahulu!</h1>
                </div>
                @endguest
        </div>
    </div>
</div>

@endsection
