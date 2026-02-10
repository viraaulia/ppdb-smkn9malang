<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tentang;

class TentangSeeder extends Seeder
{
    public function run(): void
    {
        Tentang::create([
            'id' => 1,
            'deskripsi_aplikasi' => 'Aplikasi PPDB SMK Negeri 9 Malang',
            'versi_aplikasi' => '1.0.0',
            'tanggal_dibuat' => '2026-01-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
