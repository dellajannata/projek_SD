<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas3 extends Model
{
    use HasFactory;
    protected $table = 'kelas3';
    protected $primaryKey = 'id';

    protected $fillable = [
        'mapel', 
        'jm_mulai',
        'jm_akhir',
        'hari',
        'ket',
    ];
}
