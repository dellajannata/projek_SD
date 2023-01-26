<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projekP5 extends Model
{
    use HasFactory;

    protected $table = 'projek_p5';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image', 
        'namaKegiatan',
        'deskripsi',
        'tanggal'
    ];
}
