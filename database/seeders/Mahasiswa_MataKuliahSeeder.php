<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Mahasiswa_MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs_matkul = [
            [
                'mahasiswa_id'  => 1941720015,
                'matakuliah_id' => 1,
                'nilai'         => 'B'
            ],
            [
                'mahasiswa_id'  => 1941720015,
                'matakuliah_id' => 2,
                'nilai'         => 'A'
            ],
            [
                'mahasiswa_id'  => 1941720015,
                'matakuliah_id' => 3,
                'nilai'         => 'B'
            ],
            [
                'mahasiswa_id'  => 1941720015,
                'matakuliah_id' => 4,
                'nilai'         => 'A'
            ]
        ];
        DB::table('mahasiswa_matakuliah')->insert($mhs_matkul);
    }
}
