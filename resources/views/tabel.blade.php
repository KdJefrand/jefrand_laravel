<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabel Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="cardcol-12 m-auto mt-5 w-75 shadow p-3 bg-body rounded" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Tabel Mahasiswa</h5>
                <table class="mt-3 table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                            <td scope="row">{{ $row->nim }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" name="input" data-bs-toggle="modal"
                                data-bs-target="#detailModal{{$row->id}}">Details</button>
                                <form action="/tabel/{{$row->id}}/edit" method="get">
                                <button type="submit" class="btn btn-warning" name="input">Edit</button>
                                </form>
                                <button type="button" class="btn btn-danger" name="input" data-bs-toggle="modal"
                                        data-bs-target="#hapusModal{{$row->id}}">Delete</button>
                            </td>
                            <div class="modal fade" id="detailModal{{$row->id}}" tabindex="-1"
                                aria-labelledby="detailModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="detailModalLabel">Detail Mahasiswa</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label">NIM</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    value="{{$row->nim}}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label">Nama Lengkap</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    value="{{$row->nama}}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label">Alamat</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    value="{{$row->alamat}}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label">Jenis Kelamin</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    value="{{$row->jenis_kelamin}}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label">Jurusan</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    value="{{$row->jurusan}}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label">Email</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    value="{{$row->email}}" readonly>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="hapusModal{{$row->id}}" tabindex="-1"
                                aria-labelledby="hapusModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="hapusModalLabel">PERHATIAN!!!</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="/tabel/{{$row->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-body">
                                                <h3>Yakin ingin hapus data
                                                    {{$row->nim}}?
                                                </h3>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <form action="/tabel/create" method="get">
                    <button class="mt-3 btn btn-secondary">Tambah</button>
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