<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai | Sistem Kepegawaian PT ABC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 1rem;
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm">
        <div class="container-fluid px-5">
            <a class="navbar-brand fw-bold" href="/">Sistem Kepegawaian PT ABC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Sistem Informasi Kepegawaian</h1>
            <p class="text-muted">Masukkan NIP untuk melihat data pegawai</p>
        </div>

        <form action="/" method="post" class="row g-3 justify-content-center">
            @csrf
            <div class="col-md-4">
                <input type="number" name="nip" class="form-control form-control-lg" placeholder="Masukkan NIP Pegawai">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary btn-lg">
                    🔍 Cari
                </button>
            </div>
        </form>

        @if(isset($pegawai))
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                @if($pegawai)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">📄 Hasil Pencarian Pegawai</h5>
                        <p><strong>Nama:</strong> {{ $pegawai->Nama }}</p>
                        <p><strong>Alamat:</strong> {{ $pegawai->Alamat }}</p>
                        <p><strong>Tanggal Lahir:</strong> {{ $pegawai->Tanggal_Lahir->format('d F Y') }}</p>
                        <p><strong>Divisi:</strong> {{ $pegawai->divisi->Nama_Divisi }}</p>
                        <div class="d-flex gap-2 mt-4">
                            <a href="/pegawai/pdf/{{ $pegawai->NIP }}" target="_blank" class="btn btn-danger">
                                🧾 Download PDF
                            </a>
                            <form action="/pegawai/excel/{{ $pegawai->NIP }}" method="post">
                                @csrf
                                <input type="hidden" name="date" value="{{ $pegawai->NIP }}">
                                <button type="submit" class="btn btn-success">
                                    📊 Download Excel
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @else
                <div class="alert alert-warning text-center">
                    Pegawai dengan NIP tersebut tidak ditemukan.
                </div>
                @endif
            </div>
        </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>