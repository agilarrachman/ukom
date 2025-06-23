<table>
    <thead>
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