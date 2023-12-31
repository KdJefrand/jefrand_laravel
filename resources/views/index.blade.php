<!doctype html> <html lang="en"> <head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1"> <title>Biodata</title> <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="{{ asset('/css/bio.css') }}">

</head>

<body>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-3 main-profile text-center">
                <div class="card mt-4 ms-3 shadow p-3 bg-body rounded">
                    <div class="card-body">
                        <img src="images/profile.jpeg" class="rounded-circle img-fluid mb-3 mt-5" alt="Profile Picture"
                            width="100px" height="100px">
                        <h5 class="card-title">Kadek Jefrand</h5>
                        <p class="card-text mt-4">
                            Socials
                        </p>
                        <hr>
                        <div class="row align-items-center">
                            <i class="col-2 bx bxl-github bx-md"></i>
                            <p class="col-4 mb-0 text-start">GitHub</p>
                            <p class="col-6 mb-0 text-end text-secondary">kd_jefrand</p>
                        </div>
                        <hr>
                        <div class="row align-items-center">
                            <i class="col-2 bx bxl-instagram bx-md"></i>
                            <p class="col-4 mb-0 text-start">Instagram</p>
                            <p class="col-6 mb-0 text-end text-secondary">kd_jefrand</p>
                        </div>
                        <hr>
                        <div class="row align-items-center">
                            <i class="col-2 bx bxl-facebook bx-md"></i>
                            <p class="col-4 mb-0 text-start">Facebook</p>
                            <p class="col-6 mb-0 text-end text-secondary">kadek jefrand</p>
                        </div>
                        <hr>
                        <div class="row align-items-center">
                            <i class="col-2 bx bxl-twitter bx-md"></i>
                            <p class="col-4 mb-0 text-start">twitter</p>
                            <p class="col-6 mb-0 text-end text-secondary">KadekJefrand</p>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-9 profile-desc">
                <div class="card mt-4 shadow p-3 bg-body rounded">
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="fName" class="col-sm-2 col-form-label mb-3">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fName"
                                    value="Kadek Jefrand Joe Paryan Lasputra" readonly>
                            </div>
                            <label for="NIM" class="col-sm-2 col-form-label mb-3">NIM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="NIM" value="2205551090" readonly>
                            </div>
                            <label for="alamat" class="col-sm-2 col-form-label mb-3">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat"
                                    value="Jl. Rahayu no. 8 Bernasi Buduk Mengwi Badung" readonly>
                            </div>
                            <label for="no_telp" class="col-sm-2 col-form-label mb-3">No. Telp</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_telp" value="081239558732" readonly>
                            </div>
                            <label for="email" class="col-sm-2 col-form-label mb-3">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" value="kadekjefrand@gmail.com"
                                    readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4 shadow p-3 bg-body rounded">
                    <div class="card-body overflow-auto">
                        <h5 class="card-title">Tugas :</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Tugas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Form Javascript</td>
                                    <td><a href="/tabel/create" class="btn btn-secondary" target="_blank">Lihat</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Koneksi dan CRUD Database</td>
                                    <td><a href="/tabel" class="btn btn-secondary" target="">Lihat</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>