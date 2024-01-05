@extends('../layout/landingpage')
@section('title', 'Kuis')
@section('content')

<div id="kuis">
    <div class="container fullscreen pt-5 pb-5">
        <div class="row">
            <h2><a class="fw-med text-black" href="{{ route('kuis') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Kuis {{ $modul->nama_modul }}</h2>
            <hr>
            @auth
                @if (count($kuis) > 0)
                    <!-- batas -->
                    <form action="/kuis-view/result/{{$modul->id}}" method="post">
                        @csrf
                        @foreach($kuis as $index => $k)
                            <div class="row kuis mb-5">
                                <p>{{ $index+1 }}. {{ $k->soal }}</p>
                                <div class="input-group mb-2">
                                    <div class="input-group-text form-control">
                                        <input id="radio{{$index+1}}" class="form-check-input mt-0" type="radio" value="{{$k->opsi_a}}" name="answer{{$index+1}}" aria-label="Radio button for following text input">
                                        <label for="radio{{$index+1}}" class="ms-2"> {{ $k->opsi_a }}</label>
                                    </div>
                                </div> 
                                <!-- Penambahan id radio{{$index+1}} agar id radio unik di setiap iterasi -->
                                <div class="input-group mb-2">
                                    <div class="input-group-text form-control">
                                        <input id="radio{{$index+2}}" class="form-check-input mt-0" type="radio" value="{{$k->opsi_b}}" name="answer{{$index+1}}" aria-label="Radio button for following text input">
                                        <label for="radio{{$index+2}}" class="ms-2"> {{ $k->opsi_b }}</label>
                                    </div>
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-text form-control">
                                        <input id="radio{{$index+3}}" class="form-check-input mt-0" type="radio" value="{{$k->opsi_c}}" name="answer{{$index+1}}" aria-label="Radio button for following text input">
                                        <label for="radio{{$index+3}}" class="ms-2"> {{ $k->opsi_c }}</label>
                                    </div>
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-text form-control">
                                        <input id="radio{{$index+4}}" class="form-check-input mt-0" type="radio" value="{{$k->opsi_d}}" name="answer{{$index+1}}" aria-label="Radio button for following text input">
                                        <label for="radio{{$index+4}}" class="ms-2"> {{ $k->opsi_d }}</label>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-danger">Submit Jawaban</button>
                    </form>
                @else
                    <!-- batas -->
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
<script>

</script>

@endsection
