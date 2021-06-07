<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presensi extends Model
{
    protected $table = "presensi"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps = false;
    protected $primaryKey = 'nim'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable
     */
    protected $fillable = [
        'Nim',
        'Nama',
        'Kelas',
        'Prodi',
        'Jurusan',
        'keterangan',
    ];
}
