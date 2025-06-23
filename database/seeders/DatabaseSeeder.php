<?php

namespace Database\Seeders;

use App\Models\Divisi;
use App\Models\Pegawai;
use App\Models\Presensi;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Divisi::create([
            'Kode_Divisi' => 'S1',
            'Nama_Divisi' => 'Gudang',
            'Pimpinan_Divisi' => 'Beni Permana, SE',
        ]);

        Divisi::create([
            'Kode_Divisi' => 'S2',
            'Nama_Divisi' => 'Produksi',
            'Pimpinan_Divisi' => 'Syaiful Bachri, ST',
        ]);

        Divisi::create([
            'Kode_Divisi' => 'S3',
            'Nama_Divisi' => 'HRD',
            'Pimpinan_Divisi' => 'Dr. Anggit Darmawan',
        ]);

        Pegawai::create([
            'NIP' => '11234',
            'Nama' => 'Arini Nikita',
            'Alamat' => 'Jl. Dedali Putih 5A Tangerang',
            'Tanggal_Lahir' => Carbon::parse('1988-01-02'),
            'Kode_Divisi' => 'S1',
        ]);

        Pegawai::create([
            'NIP' => '11235',
            'Nama' => 'Toni Purana',
            'Alamat' => 'Jl. Temanggung 21B Jakarta Selatan',
            'Tanggal_Lahir' => Carbon::parse('1983-04-04'),
            'Kode_Divisi' => 'S2',
        ]);

        Pegawai::create([
            'NIP' => '11236',
            'Nama' => 'Gigih Prayitno',
            'Alamat' => 'Jl. Sidopekso 65 Bandung',
            'Tanggal_Lahir' => Carbon::parse('1985-11-08'),
            'Kode_Divisi' => 'S3',
        ]);

        Pegawai::create([
            'NIP' => '11237',
            'Nama' => 'Hilda Rahmawati',
            'Alamat' => 'Jl. Mendut 12 Bogor',
            'Tanggal_Lahir' => Carbon::parse('1986-11-01'),
            'Kode_Divisi' => 'S2',
        ]);

        Pegawai::create([
            'NIP' => '11238',
            'Nama' => 'Miftachul Fauza',
            'Alamat' => 'Jl. Borobudur 1 Bogor',
            'Tanggal_Lahir' => Carbon::parse('1984-09-05'),
            'Kode_Divisi' => 'S3',
        ]);

        Pegawai::create([
            'NIP' => '11239',
            'Nama' => 'Katriila Tirta',
            'Alamat' => 'Jl. Kenanga 21 Jakarta Timur',
            'Tanggal_Lahir' => Carbon::parse('1984-07-05'),
            'Kode_Divisi' => 'S1',
        ]);

        Presensi::create(['NIP' => '11234', 'Jam_Masuk' => '08:10:00', 'Jam_Pulang' => '17:40:00']);
        Presensi::create(['NIP' => '11235', 'Jam_Masuk' => '08:00:00', 'Jam_Pulang' => '17:07:00']);
        Presensi::create(['NIP' => '11236', 'Jam_Masuk' => '07:00:00', 'Jam_Pulang' => '16:30:00']);
        Presensi::create(['NIP' => '11237', 'Jam_Masuk' => '07:45:00', 'Jam_Pulang' => '16:40:00']);
        Presensi::create(['NIP' => '11238', 'Jam_Masuk' => '07:50:00', 'Jam_Pulang' => '16:50:00']);
        Presensi::create(['NIP' => '11239', 'Jam_Masuk' => '07:30:00', 'Jam_Pulang' => '17:00:00']);
        Presensi::create(['NIP' => '11234', 'Jam_Masuk' => '07:20:00', 'Jam_Pulang' => '16:20:00']);
    }
}
