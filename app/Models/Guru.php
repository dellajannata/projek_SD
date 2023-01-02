<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 
        'nik',
        'nama',
        'jk',
        'tglLahir',
        'nuptk',
        'nip',
        'gol',
        'status',
        'jenisPTK',
        'pendidikanTerakhir',
        'jurusan',
        'tmt_gtk',
        'tmt_gtk_induk'
    ];
}
