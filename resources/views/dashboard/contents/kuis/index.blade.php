<div class="row row-cols-1 row-cols-md-2 g-4 mt-3 me-1">
  @foreach($datas as $data)
  <div class="col-sm">
    <div class="card px-0">
      <h5 class="card-header">Kuis</h5>
      <div class="card-body">
        <h5 class="card-title">Kuis {{$data->nama_modul}}</h5>
        <p class="card-text">{{count($data->kuis->toArray()) != 0 ? 'Terdapat '.count($data->kuis->toArray()).' Kuis yang bisa dikerjakan' : 'Tidak ada kuis di modul ini'}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  @endforeach
</div>