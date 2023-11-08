<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous"> <link rel="stylesheet" href="assets/css/bio.css"> <title>Form Javascript</title> </head>
    <body> <div class="container-fluid"> <div class="card col-12 m-auto mt-5 w-75 shadow p-3 bg-body rounded"
    style="width: 18rem;">
<h1 class="card-tittle">Form Biodata</h1>
<form onsubmit="return validateForm()" method="post" action="/tabel">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
    </div>
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp" name="alamat">
    </div>
    Jenis Kelamin:
    <div class="mt-3 form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_laki" value="Laki-laki">
        <label class="form-check-label" for="jenis_laki">
            Laki - Laki
        </label>
    </div>
    <div class="mb-3 form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_perempuan" value="Perempuan">
        <label class="form-check-label" for="jenis_perempuan">
            Perempuan
        </label>
    </div>
    <label for="jurusan" class="form-label">Jurusan</label>
    <select class="mb-3 form-select" id="jurusan" name="jurusan">
        <option selected hidden>Pilih Jurusan</option>
        <option value="Teknologi Informasi">Teknologi Informasi</option>
        <option value="Teknik Elektro">Teknik Elektro</option>
        <option value="Teknik Industri">Teknik Industri</option>
        <option value="Teknik Lingkungan">Teknik Lingkungan</option>
        <option value="Teknik Mesin">Teknik Mesin</option>
        <option value="Teknik Sipil">Teknik Sipil</option>
    </select>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    </div>
    <button type="submit" class="btn btn-primary" name="input">Submit</button>
</form>
</div>
</div>
<script src="{{ asset('/js/validateForm.js') }}"></script>
</body>

</html>