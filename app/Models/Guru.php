<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WaliKelas;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';
    protected $primaryKey = 'id';

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

    public function guru(){
        return $this->hasMany(WaliKelas::class);
    }
}
