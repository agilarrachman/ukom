<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid mx-5 d-flex justify-content-between">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a href="/">PT ABC</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/presensi">Presensi</a>
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
        <form action="/presensi" method="post" class="d-flex col-8 align-items-center mb-5">
            @csrf
            <p class="col-2 me-3 mb-0">Masukkan Tanggal:</p>
            <input type="date" name="date" class="form-control me-3" placeholder="Masukkan Tanggal Presensi" value="{{ old('date', $date ?? '') }}">
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>


        @if(isset($presensi))
        @if($presensi->isEmpty())
        <div class="alert alert-warning mt-3">
            Tidak ada data presensi pada tanggal tersebut.
        </div>
        @else
        <h4>Hasil Presensi Tanggal: {{ \Carbon\Carbon::parse($date)->translatedFormat('d F Y') }}</h4>
        <form action="/presensi/export" method="post" class="mt-3">
            @csrf
            <input type="hidden" name="date" value="{{ $date }}">
            <button type="submit" class="btn btn-success">Download Excel</button>
        </form>
        <table class="table table-bordered mt-3">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jam Masuk</th>
                    <th>Jam Pulang</th>
                </tr>
            </thead>
            <tbody>
                @foreach($presensi as $i => $p)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $p->NIP }}</td>
                    <td>{{ $p->pegawai->Nama ?? '-' }}</td>
                    <td>{{ $p->Jam_Masuk }}</td>
                    <td>{{ $p->Jam_Pulang }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>