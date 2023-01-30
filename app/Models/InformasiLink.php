<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiLink extends Model
{
    use HasFactory;

    protected $table = 'informasi_link';
    protected $primaryKey = 'id';

    protected $fillable = [
        'judul',
        'keterangan'
    ];
}
