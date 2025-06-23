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
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/presensi">Presensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" haria-current="page" ref="/divisi">Divisi</a>
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
        <form action="/divisi" method="post" class="d-flex col-8 align-items-center mb-5">
            @csrf
            <p class="col-2 me-3 mb-0">Pilih Divisi:</p>
            <select name="Kode_Divisi" class="form-select me-3 w-50">
                <option disabled {{ !isset($kodeDivisi) ? 'selected' : '' }}>-- Pilih Divisi --</option>
                @foreach ($divisi as $d)
                <option value="{{ $d->Kode_Divisi }}" {{ (isset($kodeDivisi) && $kodeDivisi == $d->Kode_Divisi) ? 'selected' : '' }}>
                    {{ $d->Nama_Divisi }}
                </option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>

        @if(isset($pegawai) && $pegawai->count() > 0)
        <h5 class="mt-4">Daftar Pegawai: {{ $divisiTerpilih->Nama_Divisi }}</h5>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $i => $p)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $p->NIP }}</td>
                    <td>{{ $p->Nama }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @elseif(isset($pegawai))
        <div class="alert alert-warning mt-4">Tidak ada pegawai dalam divisi yang dipilih.</div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>