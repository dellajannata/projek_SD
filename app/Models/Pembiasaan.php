<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembiasaan extends Model
{
    use HasFactory;

    protected $table = 'pembiasaan';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image', 
        'namaKegiatan',
        'deskripsi'
    ];
}
