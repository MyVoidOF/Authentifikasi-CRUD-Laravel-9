<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nim' => 'G.211.20.0001',
                'nama' => 'Catur Heri',
                'umur' => '20',
                'alamat' => 'Fatmawati Raya',
                'kota' => 'Semarang',
                'kelas' => 'Pagi',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nim' => 'G.211.20.0022',
                'nama' => 'Fernando Ferguso',
                'umur' => '21',
                'alamat' => 'Alibaba Street',
                'kota' => 'New York',
                'kelas' => 'Sore',
                'jurusan' => 'Sistem Informasi',
            ],
            [
                'nim' => 'G.211.20.0069',
                'nama' => 'Muhammad Ilham',
                'umur' => '19',
                'alamat' => 'Groove Street',
                'kota' => 'Athena',
                'kelas' => 'Pagi',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nim' => 'B.231.17.0029',
                'nama' => 'Anya Geraldine',
                'umur' => '22',
                'alamat' => 'Mawar Indah',
                'kota' => 'Jakarta',
                'kelas' => 'Sore',
                'jurusan' => 'Akuntansi',
            ],
        ];
        Mahasiswa::insert($data);
    }
}
