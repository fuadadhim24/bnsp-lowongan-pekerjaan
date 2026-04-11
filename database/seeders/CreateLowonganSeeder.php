<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lowongan;

class CreateLowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lowongan = [
            [
               'nama'=>'Frontend Developer',
               'gaji'=>'Rp 8.000.000 - Rp 12.000.000',
               'kategori'=>'Teknologi Informasi',
               'perusahaan'=>'Tech Solutions Indonesia',
               'alamat'=>'Jakarta Selatan, DKI Jakarta',
               'jenis'=>1,
               'status'=>1,
            ],
            [
               'nama'=>'Backend Developer',
               'gaji'=>'Rp 10.000.000 - Rp 15.000.000',
               'kategori'=>'Teknologi Informasi',
               'perusahaan'=>'Digital Innovation Corp',
               'alamat'=>'Bandung, Jawa Barat',
               'jenis'=>1,
               'status'=>1,
            ],
            [
               'nama'=>'UI/UX Designer',
               'gaji'=>'Rp 7.000.000 - Rp 10.000.000',
               'kategori'=>'Desain',
               'perusahaan'=>'Creative Design Studio',
               'alamat'=>'Surabaya, Jawa Timur',
               'jenis'=>2,
               'status'=>1,
            ],
            [
               'nama'=>'Marketing Manager',
               'gaji'=>'Rp 12.000.000 - Rp 18.000.000',
               'kategori'=>'Pemasaran',
               'perusahaan'=>'Marketing Pro Agency',
               'alamat'=>'Jakarta Pusat, DKI Jakarta',
               'jenis'=>2,
               'status'=>1,
            ],
            [
               'nama'=>'Content Writer',
               'gaji'=>'Rp 5.000.000 - Rp 8.000.000',
               'kategori'=>'Konten Kreatif',
               'perusahaan'=>'Media Publishing',
               'alamat'=>'Yogyakarta, DI Yogyakarta',
               'jenis'=>2,
               'status'=>1,
            ],
            [
               'nama'=>'Data Scientist',
               'gaji'=>'Rp 15.000.000 - Rp 25.000.000',
               'kategori'=>'Teknologi Informasi',
               'perusahaan'=>'Data Analytics Inc',
               'alamat'=>'Jakarta Barat, DKI Jakarta',
               'jenis'=>1,
               'status'=>1,
            ],
            [
               'nama'=>'Mobile App Developer',
               'gaji'=>'Rp 9.000.000 - Rp 14.000.000',
               'kategori'=>'Teknologi Informasi',
               'perusahaan'=>'App Development Co',
               'alamat'=>'Semarang, Jawa Tengah',
               'jenis'=>1,
               'status'=>1,
            ],
            [
               'nama'=>'HR Manager',
               'gaji'=>'Rp 10.000.000 - Rp 15.000.000',
               'kategori'=>'Sumber Daya Manusia',
               'perusahaan'=>'Human Resource Solutions',
               'alamat'=>'Jakarta Timur, DKI Jakarta',
               'jenis'=>2,
               'status'=>1,
            ],
            [
               'nama'=>'Accountant',
               'gaji'=>'Rp 6.000.000 - Rp 9.000.000',
               'kategori'=>'Keuangan',
               'perusahaan'=>'Financial Services Ltd',
               'alamat'=>'Medan, Sumatera Utara',
               'jenis'=>2,
               'status'=>1,
            ],
            [
               'nama'=>'Project Manager',
               'gaji'=>'Rp 15.000.000 - Rp 20.000.000',
               'kategori'=>'Manajemen',
               'perusahaan'=>'Project Management Inc',
               'alamat'=>'Denpasar, Bali',
               'jenis'=>2,
               'status'=>1,
            ],
        ];
    
        foreach ($lowongan as $key => $item) {
            Lowongan::create($item);
        }
    }
}