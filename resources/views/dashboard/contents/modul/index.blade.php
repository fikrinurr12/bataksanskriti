<a href="/modul/create" class="px-5 py-2 bg-main rounded text-white text-decoration-none">Buat Modul</a>
<div class="row row-cols-1 row-cols-md-2 g-4 mt-3 me-1">
    @foreach($datas as $data)
    <div class="col">
      <div class="card">
        <img src="storage/{{$data->gambar}}" class="card-img-top max-height-200" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$data->nama_modul}}</h5>
          <p class="card-text">Author: {{$data->user->nama_lengkap}}</p>          
          <p class="card-text">
            @php
              $target = '#detail-'.$data->id
            @endphp
            {!! strlen($data->deskripsi) > 20 ? 
            substr($data->deskripsi,0,20) . "<button type='button' class='text-primary' data-bs-toggle='modal' data-bs-target='$target'>...Lihat Selengkapnya</button>": $data->deskripsi !!}
          </p>
        </div>
        <div class="grid-button px-3 py-3">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{'komentar-'.$data->id}}">
            Komentar
          </button>
          <a href="/modul/{{$data->id}}/edit" class="d-flex align-items-center justify-content-center py-1 bg-warning rounded text-white text-decoration-none text-center">Edit</a>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#{{'hapus-'.$data->id}}">
            Hapus
          </button>
          <a href="/kuis/create/{{$data->id}}" class="d-flex align-items-center justify-content-center py-1 bg-main rounded text-white text-decoration-none text-center">Buat Kuis</a>          
        </div>
      </div>
    </div>        

    <!-- Modal Komentar -->
    <div class="modal fade" id="{{'komentar-'.$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Komentar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            @if($data->komentar)
              <h5>Ada Komentar</h5>
            @else
              <h5>Tidak ada komentar</h5>
            @endif
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>            
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Detail -->
    <div class="modal fade" id="{{'detail-'.$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">{{$data->nama_modul}}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="storage/{{$data->gambar}}" class="img-fluid" alt="...">
            <h5 class="my-3">Author: {{$data->user->nama_lengkap}}</h5>
            <p class="my-2">{{$data->deskripsi}}</p>      
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>            
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Hapus -->
    <div class="modal fade" id="{{'hapus-'.$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">{{$data->nama_modul}}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h5>Yakin ingin menghapus {{$data->nama_modul}} ?</h5>
          </div>
          <div class="modal-footer">
            <form action="/modul/{{$data->id}}" method="post">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>           
            </form>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>           
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div>