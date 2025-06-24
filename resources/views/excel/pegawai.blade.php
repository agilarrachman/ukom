<table style="border-collapse: collapse; width: 100%;">
    <thead>
        <tr>
            <th colspan="2" style="background-color: #0d6efd; color: white; text-align: center; padding: 10px; font-size: 18px;">
                <strong>Data Pegawai</strong>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #dee2e6; padding: 8px; background-color: #f1f3f5;"><strong>NIP</strong></td>
            <td style="border: 1px solid #dee2e6; padding: 8px;">{{ $pegawai->NIP }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #dee2e6; padding: 8px; background-color: #f1f3f5;"><strong>Nama</strong></td>
            <td style="border: 1px solid #dee2e6; padding: 8px;">{{ $pegawai->Nama }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #dee2e6; padding: 8px; background-color: #f1f3f5;"><strong>Alamat</strong></td>
            <td style="border: 1px solid #dee2e6; padding: 8px;">{{ $pegawai->Alamat }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #dee2e6; padding: 8px; background-color: #f1f3f5;"><strong>Tanggal Lahir</strong></td>
            <td style="border: 1px solid #dee2e6; padding: 8px;">{{ \Carbon\Carbon::parse($pegawai->Tanggal_Lahir)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #dee2e6; padding: 8px; background-color: #f1f3f5;"><strong>Kode Divisi</strong></td>
            <td style="border: 1px solid #dee2e6; padding: 8px;">{{ $pegawai->Kode_Divisi }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #dee2e6; padding: 8px; background-color: #f1f3f5;"><strong>Nama Divisi</strong></td>
            <td style="border: 1px solid #dee2e6; padding: 8px;">{{ $pegawai->divisi->Nama_Divisi ?? '-' }}</td>
        </tr>
    </tbody>
</table>