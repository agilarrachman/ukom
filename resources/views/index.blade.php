<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container-fluid mx-5 d-flex justify-content-between">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse w-100" id="navbarNav">
                <!-- Brand -->
                <a class="navbar-brand fw-bold me-auto" href="/">Sistem Kepegawaian PT ABC</a>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/presensi">Presensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/divisi">Divisi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="heading mb-5">
            <h1>Sistem Informasi Kepegawaian PT ABC</h1>
            <p class="mb-3">Selamat datang di Sistem Informasi Kepegawaian PT ABC</p>
        </div>
        <form action="/" method="post" class="d-flex col-8 align-items-center mb-5">
            @csrf
            <p class="col-2 me-3 mb-0">Masukkan NIP:</p>
            <input type="number" name="nip" class="form-control me-3" placeholder="Masukkan NIP Pegawai">
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>

        @if(isset($pegawai))
        @if($pegawai)
        <div class="card col-6 mt-3">
            <div class="card-body">
                <h5 class="mb-3">Hasil Pencarian Data Pegawai:</h5>
                <p><strong>Nama:</strong> {{ $pegawai->Nama }}</p>
                <p><strong>Alamat:</strong> {{ $pegawai->Alamat }}</p>
                <p><strong>Tanggal_Lahir:</strong> {{ $pegawai->Tanggal_Lahir->format('d F Y') }}</p>
                <p><strong>Divisi:</strong> {{ $pegawai->divisi->Nama_Divisi }}</p>
                <a href="/pegawai/pdf/{{ $pegawai->NIP }}" class="btn btn-danger mt-3" target="_blank">
                    Download PDF
                </a>
            </div>
        </div>
        @else
        <div class="mt-3 alert alert-warning">
            Pegawai dengan NIP tersebut tidak ditemukan.
        </div>
        @endif
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>