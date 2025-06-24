<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Pegawai</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
            margin: 40px;
            color: #212529;
        }

        .header {
            background-color: #0d6efd;
            /* Bootstrap primary */
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 30px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .table td {
            padding: 10px;
            border: 1px solid #dee2e6;
        }

        .table td.label {
            background-color: #f8f9fa;
            font-weight: bold;
            width: 30%;
        }

        .footer {
            margin-top: 40px;
            font-size: 12px;
            text-align: center;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>Data Pegawai</h2>
    </div>

    <table class="table">
        <tr>
            <td class="label">NIP</td>
            <td>{{ $pegawai->NIP }}</td>
        </tr>
        <tr>
            <td class="label">Nama</td>
            <td>{{ $pegawai->Nama }}</td>
        </tr>
        <tr>
            <td class="label">Alamat</td>
            <td>{{ $pegawai->Alamat }}</td>
        </tr>
        <tr>
            <td class="label">Tanggal Lahir</td>
            <td>{{ \Carbon\Carbon::parse($pegawai->Tanggal_Lahir)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td class="label">Divisi</td>
            <td>{{ $pegawai->divisi->Nama_Divisi ?? '-' }}</td>
        </tr>
    </table>

    <div class="footer">
        Dicetak oleh Sistem Kepegawaian PT ABC — {{ now()->format('d/m/Y H:i') }}
    </div>
</body>

</html>