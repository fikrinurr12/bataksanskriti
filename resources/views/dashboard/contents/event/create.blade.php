<h2 class="text-dark mt-5"><a class="text-left" href="/modul"><i class="fa fa-arrow-left" aria-hidden="true"></i></a> Form Buat Event</h2>
<form action="/event" method="post" class="me-3" enctype="multipart/form-data">
    @csrf
    <div class="input-group flex-nowrap my-3">
        <span class="input-group-text" id="addon-wrapping">Judul Event</span>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required>
    </div>
    <div class="input-group my-3">
        <span class="input-group-text" id="addon-wrapping">Tanggal</span>
        <input type="datetime-local" class="form-control" name="tanggal" id="tanggal" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required>
    </div>
    <div class="input-group my-3">
        <span class="input-group-text" id="addon-wrapping">Lokasi</span>
        <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required>
    </div>
    <div class="input-group my-3">
        <input type="file" class="form-control" id="gambar" name="gambar" required>
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
    </div>
    <div class="input-group my-3">
        <span class="input-group-text">Deskripsi</span>
        <textarea class="form-control" name="deskripsi" id="deskripsi" aria-label="With textarea" required></textarea>
    </div>
    <button type="submit" style="border: none;" class="px-5 py-2 bg-main text-white rounded">Tambah</button>
</form>