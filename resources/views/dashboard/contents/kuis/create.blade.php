@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show mt-3 me-2" role="alert">
  {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<h2 class="text-dark pt-4"><a class="text-left" href="/kuis"><i class="fa fa-arrow-left text-danger" aria-hidden="true"></i></a> Form Buat Kuis</h2>
<form action="/kuis/store" method="post" class="me-3" enctype="multipart/form-data">
    @csrf
    <div class="input-group my-3">
        <span class="input-group-text">Soal</span>
        <textarea class="form-control" name="soal" id="soal" aria-label="With textarea" required></textarea>
        @error('soal')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="input-group flex-nowrap my-3">
        <span class="input-group-text" id="addon-wrapping">Opsi A</span>
        <input type="text" class="form-control" name="opsi_a" id="opsi_a" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required>
        @error('opsi_a')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>    
    <div class="input-group flex-nowrap my-3">
        <span class="input-group-text" id="addon-wrapping">Opsi B</span>
        <input type="text" class="form-control" name="opsi_b" id="opsi_b" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required>
        @error('opsi_b')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="input-group flex-nowrap my-3">
        <span class="input-group-text" id="addon-wrapping">Opsi C</span>
        <input type="text" class="form-control" name="opsi_c" id="opsi_c" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required>
        @error('opsi_c')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="input-group flex-nowrap my-3">
        <span class="input-group-text" id="addon-wrapping">Opsi D</span>
        <input type="text" class="form-control" name="opsi_d" id="opsi_d" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required>
        @error('opsi_d')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="input-group flex-nowrap my-3">
        <span class="input-group-text" id="addon-wrapping">Jawaban</span>
        <input type="text" class="form-control" name="jawaban" id="jawaban" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required>
        @error('jawaban')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="input-group flex-nowrap my-3">        
        <input type="hidden" class="form-control" name="modul_id" id="modul_id" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" value="{{$data->id}}">
    </div>
    <button type="submit" style="border: none;" class="px-5 py-2 bg-main text-white rounded">Tambah</button>
</form>