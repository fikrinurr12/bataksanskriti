<a href="/modul" class="px-5 py-2 btn btn-danger mt-3">Buat Kuis</a>
<button type='button' class='px-5 py-2 btn btn-primary mt-3' data-bs-toggle='modal' data-bs-target='#detail-jawaban'>Lihat Jawaban</button>
<div class="row row-cols-1 row-cols-md-3 g-4 mt-3 me-1">
  @foreach($datas as $data)
  <div class="col-sm">
    <div class="card px-0" style="min-height: 150px;">
      <h5 class="card-header">Kuis {{$data->nama_modul}}</h5>
      <div class="card-body">
        <p class="card-text">{{count($data->kuis->toArray()) != 0 ? 'Terdapat '.count($data->kuis->toArray()).' Kuis yang bisa dikerjakan' : 'Tidak ada kuis di modul ini'}}</p>        
        @php
          $url = '/kuis/lists/'.$data->id;
        @endphp
        {!! count($data->kuis->toArray()) != 0 ? "<a href=$url class='btn btn-primary'>List Kuis</a>" : '' !!}
      </div>
    </div>
  </div>
  @endforeach

  <div class="modal fade" id="detail-jawaban" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi Jawaban</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            @foreach ($skors as $skor)
            <div class="row">
              <div class="col-1">
                <img src="{{ asset('assets/users/1.jpg') }}" alt="" class="img-fluid rounded-circle">
              </div>
              <div class="col-11">
                <b>{{ $skor->user->nama_lengkap }}</b>
                <p>
                  Kuis : {{ $skor->modul->nama_modul }} <br>
                  Poin : {{ $skor->poin }}<br>
                </p>
              </div>
            </div>
            @endforeach
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>

    </div>
  </div>

</div>