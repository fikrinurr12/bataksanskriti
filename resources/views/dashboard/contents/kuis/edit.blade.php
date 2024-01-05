<h2 class="text-dark pt-4"><a class="text-left" href="/kuis"><i class="fa fa-arrow-left text-danger" aria-hidden="true"></i></a> Form Edit Kuis</h2>
<form action="/kuis/update/{{$data_kuis->id}}" method="post" class="me-3" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="input-group my-3">
        <span class="input-group-text">Soal</span>
        <textarea class="form-control" name="soal" id="soal" aria-label="With textarea" required>{{$data_kuis->soal}}</textarea>
    </div>
    <div class="input-group flex-nowrap my-3">
        <span class="input-group-text" id="addon-wrapping">Opsi A</span>
        <input type="text" class="form-control" name="opsi_a" id="opsi_a" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required value="{{$data_kuis->opsi_a}}">
    </div>    
    <div class="input-group flex-nowrap my-3">
        <span class="input-group-text" id="addon-wrapping">Opsi B</span>
        <input type="text" class="form-control" name="opsi_b" id="opsi_b" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required value="{{$data_kuis->opsi_b}}">
    </div>
    <div class="input-group flex-nowrap my-3">
        <span class="input-group-text" id="addon-wrapping">Opsi C</span>
        <input type="text" class="form-control" name="opsi_c" id="opsi_c" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required value="{{$data_kuis->opsi_c}}">
    </div>
    <div class="input-group flex-nowrap my-3">
        <span class="input-group-text" id="addon-wrapping">Opsi D</span>
        <input type="text" class="form-control" name="opsi_d" id="opsi_d" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required value="{{$data_kuis->opsi_d}}">
    </div>
    <div class="input-group flex-nowrap my-3">
        <span class="input-group-text" id="addon-wrapping">Jawaban</span>
        <input type="text" class="form-control" name="jawaban" id="jawaban" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required value="{{$data_kuis->jawaban}}">
    </div>    
    <button type="submit" style="border: none;" class="px-5 py-2 bg-main text-white rounded">Edit</button>
</form>