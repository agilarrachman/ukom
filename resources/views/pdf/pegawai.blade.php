<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Pegawai</title>
    <style>
        body {
            font-family: sans-serif;
        }

        h2 {
            margin-bottom: 10px;
        }

        p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <h2>Data Pegawai</h2>
    <p><strong>NIP:</strong> {{ $pegawai->NIP }}</p>
    <p><strong>Nama:</strong> {{ $pegawai->Nama }}</p>
    <p><strong>Alamat:</strong> {{ $pegawai->Alamat }}</p>
    <p><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($pegawai->Tanggal_Lahir)->translatedFormat('d F Y') }}</p>
    <p><strong>Divisi:</strong> {{ $pegawai->divisi->Nama_Divisi }}</p>
</body>

</html>