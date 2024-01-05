@extends('../layout/landingpage')
@section('title', 'Jadwal')
@section('content')

<div id="jadwal">
    <div class="container fullscreen pt-5 pb-5">
        <div class="row">
            <h2><a class="fw-med text-black" href="{{ route('jadwal') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Jadwal Budaya Batak</h2><hr>
            <div class="col-8">
                <div class="row">
                    <img src="{{ asset('storage') }}/{{ $data->gambar }}" alt="">
                </div>
                <div class="row pt-3">
                    <b>By : {{ $data->user->nama_lengkap }}</b>
                    <p>Lokasi : {{ $data->lokasi }}</p>
                    <p>Tanggal : {{ $data->tanggal }}</p>
                    <p>{{ $data->deskripsi }}</p>
                </div>
            </div>
            <div class="col-4">
                
                <!--- batas -->
                @foreach ($sidebar as $s)
                <div class="row mb-5 jadwal-sidebar">
                    <div class="col-4">
                        <img src="{{ asset('storage') }}/{{ $s->gambar }}" alt="">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <h2>{{ $s->lokasi }}</h2>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('isi_jadwal', $s->id) }}">
                                <button class="btn btn-danger" type="button">Lihat Selengkapnya</button></a>    
                        </div>
                    </div>
                </div>
                @endforeach
                <!--- batas -->
            </div>
        </div>
    </div>
</div>


@endsection