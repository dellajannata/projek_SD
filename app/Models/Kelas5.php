<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas5 extends Model
{
    use HasFactory;
    protected $table = 'kelas5';
    protected $primaryKey = 'id';

    protected $fillable = [
        'mapel', 
        'jm_mulai',
        'jm_akhir',
        'hari',
        'ket',
    ];
}
