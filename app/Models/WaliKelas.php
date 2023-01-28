<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;


class WaliKelas extends Model
{
    use HasFactory;
    protected $table = 'wali_kelas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'guru_id', 
        'kelas',
        'jmlh_siswa_lk',
        'jmlh_siswa_pr',
    ];

    public function guru(){
        return $this->belongsTo(Guru::class,'guru_id', 'id');
    }
}
