<h2 class="text-dark mt-5"><a class="text-left" href="/event"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Form Edit Jadwal</h2>
<form action="/event/{{$data->id}}" method="post" class="me-3" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="input-group flex-nowrap my-3">
        <span class="input-group-text" id="addon-wrapping">Lokasi</span>
        <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="" aria-label="lokasi" aria-describedby="addon-wrapping" required value='{{$data->lokasi}}'>
    </div>
    <div class="input-group flex-nowrap my-3">
        <span class="input-group-text" id="addon-wrapping">Tanggal</span>
        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="" aria-label="tanggal" aria-describedby="addon-wrapping" required value='{{$data->tanggal}}'>
    </div>
    <div class="input-group my-3">
        <input type="file" class="form-control" id="gambar" name="gambar">
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
    </div>
    <div class="input-group my-3">
        <span class="input-group-text">Deskripsi</span>
        <textarea class="form-control" name="deskripsi" id="deskripsi" aria-label="With textarea" required>{{$data->deskripsi}}</textarea>
    </div>
    <button type="submit" class="px-5 py-2 bg-main text-white rounded">Edit</button>
</form>