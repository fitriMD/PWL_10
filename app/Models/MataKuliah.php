<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;

class MataKuliah extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';

    protected $fillable = [
        'nama_matkul',
        'sks',
        'jam',
        'kelas',
        'semester',
    ];

    
    public function mahasiswamatakuliah(){
        return $this->hasMany(Mahasiswa_MataKuliah::class);
    }
}
