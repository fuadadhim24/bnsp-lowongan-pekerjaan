<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gaji');
            $table->string('kategori');
            $table->string('perusahaan');
            $table->string('alamat');
            $table->integer('jenis');
            $table->integer('status');
            $table->timestamps();
        });
        DB::table('lowongan')->insert([
            [
                'nama' => 'Frontend Developer',
                'gaji' => '$60,000 - $80,000 per year',
                'kategori' => 'Information Technology',
                'perusahaan' => 'Tech Solutions Inc.',
                'alamat' => 'Jember, Indonesia.',
                'jenis' => 1, 
                'status' => 1, 
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'nama' => 'Marketing Manager',
                'gaji' => '$70,000 - $90,000 per year',
                'kategori' => 'Marketing',
                'perusahaan' => 'Marketing Pro Agency',
                'alamat' => 'Surabaya Center Mall',
                'jenis' => 2, 
                'status' => 1, 
                'created_at' => now(),
                'updated_at' => null,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongan');
    }
};
