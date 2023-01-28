<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas6 extends Model
{
    use HasFactory;
    protected $table = 'kelas6';
    protected $primaryKey = 'id';

    protected $fillable = [
        'mapel', 
        'jm_mulai',
        'jm_akhir',
        'hari',
        'ket',
    ];
}
