<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tambahMahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'Nim'=>'1941720230',
                'Nama'=>'Muhammad Reza pahlevi',
                'Kelas'=>'2D',
                'Prodi'=>'D4 informatika',
                'Jurusan'=>'T. informatika',
                'Keterangan'=>'Hadir'
            ],[
                'Nim'=>'19417202',
                'Nama'=>'Jojon',
                'Kelas'=>'2Z',
                'Prodi'=>'D4 informatika',
                'Jurusan'=>'T. informatika',
                'Keterangan'=>'Hadir'
            ],[
                'Nim'=>'194172023',
                'Nama'=>'Joni',
                'Kelas'=>'2z',
                'Prodi'=>'D4 informatika',
                'Jurusan'=>'T. informatika',
                'Keterangan'=>'Hadir'
            ]];
            DB::table('presensi')->insert($data);
    }
}
