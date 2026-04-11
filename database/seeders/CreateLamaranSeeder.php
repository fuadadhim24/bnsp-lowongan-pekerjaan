<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lamaran;

class CreateLamaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lamaran = [
            [
               'status'=>1,
               'cv'=>'cv_user1.pdf',
               'id_user'=>1,
               'id_lowongan'=>1,
            ],
            [
               'status'=>2,
               'cv'=>'cv_user2.pdf',
               'id_user'=>2,
               'id_lowongan'=>2,
            ],
            [
               'status'=>3,
               'cv'=>'cv_user3.pdf',
               'id_user'=>1,
               'id_lowongan'=>3,
            ],
            [
               'status'=>1,
               'cv'=>'cv_user4.pdf',
               'id_user'=>2,
               'id_lowongan'=>4,
            ],
            [
               'status'=>2,
               'cv'=>'cv_user5.pdf',
               'id_user'=>1,
               'id_lowongan'=>5,
            ],
            [
               'status'=>3,
               'cv'=>'cv_user6.pdf',
               'id_user'=>2,
               'id_lowongan'=>6,
            ],
            [
               'status'=>1,
               'cv'=>'cv_user7.pdf',
               'id_user'=>1,
               'id_lowongan'=>7,
            ],
            [
               'status'=>2,
               'cv'=>'cv_user8.pdf',
               'id_user'=>2,
               'id_lowongan'=>8,
            ],
            [
               'status'=>3,
               'cv'=>'cv_user9.pdf',
               'id_user'=>1,
               'id_lowongan'=>9,
            ],
            [
               'status'=>1,
               'cv'=>'cv_user10.pdf',
               'id_user'=>2,
               'id_lowongan'=>10,
            ],
        ];
    
        foreach ($lamaran as $key => $item) {
            Lamaran::create($item);
        }
    }
}