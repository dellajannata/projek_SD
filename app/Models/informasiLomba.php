<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasiLomba extends Model
{
    use HasFactory;

    protected $table = 'informasi_lomba';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image', 
        'deskripsi'
    ];
}
