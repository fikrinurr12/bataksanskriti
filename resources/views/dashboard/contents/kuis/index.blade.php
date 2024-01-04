<div class="row row-cols-1 row-cols-md-2 g-4 mt-3 me-1">
  @foreach($datas as $data)
  <div class="col-sm">
    <div class="card px-0">
      <h5 class="card-header">Kuis {{$data->nama_modul}}</h5>
      <div class="card-body">
        <p class="card-text">{{count($data->kuis->toArray()) != 0 ? 'Terdapat '.count($data->kuis->toArray()).' Kuis yang bisa dikerjakan' : 'Tidak ada kuis di modul ini'}}</p>        
        @php
          $url = '/kuis/lists/'.$data->id;
        @endphp
        <a href="/kuis/lists/{{$data->id}}" class="btn btn-primary">List Kuis</a>       
      </div>
    </div>
  </div>
  @endforeach
</div>