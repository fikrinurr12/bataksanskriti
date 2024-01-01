<a href="/modul/create" class="px-5 py-2 bg-main rounded text-white text-decoration-none">Buat Modul</a>
<div class="row row-cols-1 row-cols-md-2 g-4 mt-3 me-1">
    @foreach($datas as $data)
    <div class="col">
      <div class="card">
        <img src="storage/{{$data->gambar}}" class="card-img-top max-height-200" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$data->nama_modul}}</h5>
          <p class="card-text">Author: {{$data->user->nama_lengkap}}</p>
          <p class="card-text">{{$data->deskripsi}}</p>
        </div>
      </div>
    </div>
    @endforeach
</div>