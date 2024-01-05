<title>Dashboard | Event - Create</title>
<h2 class="text-dark pt-4"><a class="text-left" href="/event"><i class="fa fa-arrow-left text-danger" aria-hidden="true"></i></a> Form Buat Event</h2>
<form action="/event" method="post" class="me-3" enctype="multipart/form-data">
    @csrf    
    <div class="input-group my-3">
        <span class="input-group-text" id="addon-wrapping">Tanggal</span>
        <input type="datetime-local" class="form-control" name="tanggal" id="tanggal" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required>
        @error('tanggal')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="input-group my-3">
        <span class="input-group-text" id="addon-wrapping">Lokasi</span>
        <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required>
        @error('lokasi')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="input-group my-3">
        <input type="file" class="form-control" id="gambar" name="gambar" required>
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
        @error('gambar')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="input-group my-3">
        <span class="input-group-text">Deskripsi</span>
        <textarea class="form-control" name="deskripsi" id="deskripsi" aria-label="With textarea" required></textarea>
        @error('deskripsi')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <button type="submit" style="border: none;" class="px-5 py-2 bg-main text-white rounded">Tambah</button>
</form>