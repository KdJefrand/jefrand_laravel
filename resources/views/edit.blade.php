<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="cardcol-12 m-auto mt-5 w-75 shadow p-3 bg-body rounded" style="width: 18rem;">
            <div class="card-body">
                <form onsubmit="return validateForm()" method="post" action="{{ route('tabel.update', $form->id) }}">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim"
                                value="{{$form->nim}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama"
                                aria-describedby="emailHelp" name="nama"
                                value="{{$form->nama}}">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat"
                                aria-describedby="emailHelp" name="alamat"
                                value="{{$form->alamat}}">
                        </div>
                        Jenis Kelamin:
                        <div class="mt-3 form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                id="jenis_laki" value="Laki-laki" <?php if ($form->jenis_kelamin == 'Laki-laki') {
                                    echo 'checked';
                                } ?>>
                            <label class="form-check-label" for="jenis_laki">
                                Laki - Laki
                            </label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                id="jenis_perempuan" value="Perempuan" <?php if ($form->jenis_kelamin == 'Perempuan') {
                                    echo 'checked';
                                } ?>>
                            <label class="form-check-label" for="jenis_perempuan">
                                Perempuan
                            </label>
                        </div>
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="mb-3 form-select" id="jurusan" name="jurusan">
                            <option selected hidden>
                                {{$form->jurusan}}
                            </option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                        </select>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="" class="form-control" id="email"
                                aria-describedby="emailHelp" name="email"
                                value="{{$form->email}}">
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="config/validateForm.js"></script>
</body>

</html>