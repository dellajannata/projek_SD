<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailInformasi extends Model
{
    use HasFactory;

    protected $table = 'detailinformasi';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image', 
        'deskripsi'
    ];
}
