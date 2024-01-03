<div class="list-group pe-3">    
    @foreach($kuis_list as $index => $list)        
    <div href="#" class="list-group-item list-group-item-action" aria-current="true">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="">Soal ke - {{$index+1}}</h5>
        <small>3 days ago</small>
      </div>
      <p class="mb-1">{{$list->soal}}</p>
      <p class="mb-1">A. {{$list->opsi_a}}</p>
      <p class="mb-1">B. {{$list->opsi_b}}</p>
      <p class="mb-1">C. {{$list->opsi_c}}</p>
      <p class="mb-1">D. {{$list->opsi_d}}</p>
      <small>Jawabah: {{$list->jawaban}}</small>
      <div class="d-flex my-3 gap-1">
          <a href="/kuis/edit/{{$list->id}}" class="px-5 btn btn-warning rounded text-white">Edit</a>
          <form action="/kuis/{{$list->id}}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="px-5 btn btn-danger text-white rounded">Hapus</button>
          </form>
      </div>
    </div>
    @endforeach
</div>