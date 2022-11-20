<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skema;

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
            'kode' => 'SKM-BDT',
            'nama' => 'BIG DATA SCIENTIST',
            'slug' => 'big_data_scientist',
            'jenis' => 'Okupasu',
            'harga' => 100000,
            'unit_kompetensi' => '5 (Lima)',
            'ringkasan' => 'Profesi terkait skema ini antara lain Network Engineer, Sys admin, IT Network, IT Infrastructure dsb'
        ]);

        Skema::create([
            'kode' => 'SS-003-LSPTD-2019',
            'nama' => 'JUNIOR NETWORK ADMINISTRATOR',
            'slug' => 'junior_network_administrator',
            'jenis' => 'Okupasu',
            'harga' => 100000,
            'unit_kompetensi' => '5 (Lima)',
            'ringkasan' => 'Profesi terkait skema ini antara lain Network Engineer, Sys admin, IT Network, IT Infrastructure dsb'
        ]);
    }
}
