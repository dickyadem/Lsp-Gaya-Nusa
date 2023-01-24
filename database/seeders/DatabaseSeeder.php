<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Skema\ElemenKompetensi;
use App\Models\Skema\KriteriaUnjukKerja;
use Illuminate\Database\Seeder;
use App\Models\Skema\Skema;
use App\Models\Skema\Unit;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Skema::create([
            'kode' => 'SKM/PERURI/001',
            'image' => null,
            'nama' => 'Operator Pembuat Master Acuan Cetak Intaglio',
            'slug' => 'operator_pembuat_master_acuan_cetak_ntaglio',
            'dokumen' => null,
            'skkni' => null,
        ]);

        Skema::create([
            'kode' => 'SKM/PERURI/002',
            'image' => null,
            'nama' => 'Operator Utama Pembuat Master dan Acuan Cetak',
            'slug' => 'operator_utama_pembuat_master_dan_acuan_cetak',
            'dokumen' => null,
            'skkni' => null,
        ]);

        Unit::create([
            'kode' => 'C.18.URI.09.00.001.01',
            'nama' => 'Menerapkan Kesehatan dan Keselamatan Kerja (K3) di Tempat Kerja',
        ]);

        Unit::create([
            'kode' => 'C.18.URI.01.00.001.01',
            'nama' => 'Menerima Bahan Pembuatan Acuan Cetak Uang',
        ]);

        Unit::create([
            'kode' => 'C.18.URI.01.00.002.01',
            'nama' => 'Menginput Data Bahan dan Produksi Acuan Cetak pada Sistem',
        ]);

        Unit::create([
            'kode' => 'C.18.URI.01.00.006.01',
            'nama' => 'Mengoperasikan Mesin Potong',
        ]);

        ElemenKompetensi::create([
            'nama' => 'Mengidentifikasi ancaman bahaya terhadap kesehatan dan keselamatan kerja',
            'unit_id' => '1',
        ]);

        ElemenKompetensi::create([
            'nama' => 'Menjalankan pekerjaan dengan menerapkan prosedur kesehatan dan keselamatan kerja',
            'unit_id' => '1',
        ]);

        ElemenKompetensi::create([
            'nama' => 'Mengidentifikasi kebutuhan kontak line',
            'unit_id' => '2',
        ]);

        ElemenKompetensi::create([
            'nama' => 'Memeriksa Kesesuaian Jumlah dan Kualitas',
            'unit_id' => '2',
        ]);

        ElemenKompetensi::create([
            'nama' => 'Menyimpan Bahan Baku Pembuatan Acuan Cetak',
            'unit_id' => '2',
        ]);

        ElemenKompetensi::create([
            'nama' => 'Monitoring Jumlah Persediaan Bahan Baku Pembuatan Acuan Cetak',
            'unit_id' => 2,
        ]);


        KriteriaUnjukKerja::create([
            'nama' => 'Ancaman bahaya di area kerja diidentifikasi sebelum menjalankan pekerjaan',
            'elemen_kompetensi_id' => 1,
        ]);
        KriteriaUnjukKerja::create([
            'nama' => 'Ancaman bahaya dilaporkan kepada personil yang ditunjuk sesuai prosedur perusahaan',
            'elemen_kompetensi_id' => 1,
        ]);
        KriteriaUnjukKerja::create([
            'nama' => 'Alat Pelindung Diri (APD) digunakan sesuai ketentuan',
            'elemen_kompetensi_id' => 2,
        ]);
        KriteriaUnjukKerja::create([
            'nama' => 'Prosedur kesehatan dan keselamatan kerja dijalankan selama bekerja',
            'elemen_kompetensi_id' => 2,
        ]);
        KriteriaUnjukKerja::create([
            'nama' => 'Lingkungan kerja dijaga dari ancaman bahaya kesehatan dan keselamatan kerja',
            'elemen_kompetensi_id' => 2,
        ]);

    }
}
